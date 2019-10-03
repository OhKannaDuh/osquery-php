<?php

namespace OhKannaDuh\OsQueryTests;

use Mockery;
use Mockery\MockInterface;
use OhKannaDuh\OsQuery\Container;
use OhKannaDuh\OsQuery\FactoryInterface;

final class ContainerMocker
{
    /** @var Container&MockInterface */
    private $container;


    /** Creates the container mock */
    public function __construct()
    {
        $this->container = Mockery::mock(Container::class);
    }


    /**
     * @var iterable $expectations
     *
     * @return FactoryInterface&MockInterface
     */
    public function getMockFactory(iterable $expectations)
    {
        /** @var FactoryInterface&MockInterface $factory */
        $factory = Mockery::mock(FactoryInterface::class);

        foreach ($expectations as $expectation) {
            $factory
                ->shouldReceive($expectation["method"])
                ->with($expectation["arguments"])
                ->andReturn($expectation["return"]);
        }

        return $factory;
    }


    /**
     * @param string $model
     * @param FactoryInterface $factory
     *
     * @return self
     */
    public function addFactory(string $model, FactoryInterface $factory): self
    {
        $this->container
            ->shouldReceive("getFactory")
            ->with($model)
            ->andReturn($factory);

        return $this;
    }


    /** @return Container&MockInterface */
    public function getMock()
    {
        return $this->container;
    }
}
