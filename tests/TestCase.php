<?php

namespace OhKannaDuh\OsQueryTests;

use Mockery;
use OhKannaDuh\OsQuery\Container;
use OhKannaDuh\OsQuery\OsQuery;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    /** @var Container */
    protected $container;

    /** @var bool */
    protected $usesContainer = false;


    /** @inheritDoc */
    public function setUp(): void
    {
        if ($this->usesContainer) {
            $this->container = Container::create();
        }
    }


    /**
     * Provides an id, name, command, and hidden value for creating a model [OhKannaDuh\OsQueryTests\TestModel].
     *
     * @return iterable
     */
    public function modelDataProvider(): iterable
    {
        $container = Container::create();

        $data = [
            [1, "test", "A test model", false,],
            [2, "honey", "A test model", false,],
            [3, "lemon", "A test model", false,],
            [4, "baxter", "A test model", true,],
        ];

        foreach ($data as $datum) {
            $datum[] = TestModel::load([
                "id" => $datum[0],
                "name" => $datum[1],
                "comment" => $datum[2],
                "hidden" => $datum[3],
            ], $container);

            yield $datum;
        }
    }


    /**
     * @param string $query
     * @param array $data
     *
     * @return OsQuery
     */
    public function getOsQueryMock(string $query, array $data): OsQuery
    {
        /** @var Mockery&OsQuery $osQuery */
        $osQuery = Mockery::mock(OsQuery::class);

        $osQuery
            ->shouldReceive("query")
            ->with($query)
            ->andReturn($data);

        return $osQuery;
    }
}
