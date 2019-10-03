<?php

namespace OhKannaDuh\OsQuery;

use DI\Container as DiContainer;
use HaydenPierce\ClassFinder\ClassFinder;

class Container
{
    /** @var string */
    private const FACTORIES_NAMESPACE = "OhKannaDuh\OsQuery\Factories";

    /** @var DiContainer */
    private $container;

    /** @var array<string,string> */
    private $map = [];


    /**
     * Register all of our factories.
     */
    public function __construct()
    {
        $this->container = new DiContainer();
        $this->container->set(get_class($this), $this);
    }


    /**
     * Creates an instance of this and registers all known Factories.
     *
     * @return self
     */
    public static function create(): self
    {
        $container = new self();

        $classes = ClassFinder::getClassesInNamespace(self::FACTORIES_NAMESPACE);
        foreach ($classes as $class) {
            $factory = $container->container->get($class);

            $container->register($factory);
        }

        return $container;
    }


    /**
     * @param FactoryInterface $factory
     *
     * @return void
     */
    public function register(FactoryInterface $factory): void
    {
        $this->map[$factory->getModelClass()] = get_class($factory);
    }


    /**
     * @param string $class
     *
     * @return mixed
     */
    public function get(string $class)
    {
        return $this->container->get($class);
    }


    /**
     * @param string $model
     *
     * @return FactoryInterface
     */
    public function getFactory(string $model): FactoryInterface
    {
        if (array_key_exists($model, $this->map) === false) {
            // :|
        }

        return $this->container->get($this->map[$model]);
    }
}
