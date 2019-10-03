<?php

namespace OhKannaDuh\OsQueryTests;

use OhKannaDuh\OsQuery\Container;
use OhKannaDuh\OsQuery\OsQuery;

final class FactoryTest extends TestCase
{


    /**
     * @return iterable
     */
    public function queryProvider(): iterable
    {
        // query, data
        return [
            [
                "SELECT tests.* FROM tests",
                [
                    ["id" => 1],
                    ["id" => 2],
                    ["id" => 3],
                    ["id" => 4],
                ]
            ],
            [
                "SELECT tests.* FROM tests",
                [
                    ["id" => 1]
                ],
            ],
            [
                "SELECT tests.* FROM tests",
                [
                    ["id" => 1],
                    ["id" => 2],
                    ["id" => 3],
                    ["id" => 4],
                    ["id" => 5],
                ],
            ],
            [
                "SELECT tests.* FROM tests",
                [],
            ],
        ];
    }


    /**
     * Ensure we all uses the correct query.
     *
     * @dataProvider queryProvider
     *
     * @param string $query
     * @param array $data
     */
    public function testAll(string $query, array $data): void
    {
        $osQuery = $this->getOsQueryMock($query, $data);
        $factory = new TestFactory($osQuery, Container::create());

        $factory->all();

        # We are testing the output of Mockery here.
        $this->assertTrue(true);
    }


    /**
     * Ensure our query contains the selected fields if specified.
     *
     * @dataProvider queryProvider
     *
     * @param string $query
     * @param array $data
     */
    public function testAllWithColumns(string $query, array $data): void
    {
        $query = str_replace("tests.*", "tests.id, tests.name", $query);

        $osQuery = $this->getOsQueryMock($query, $data);
        $factory = new TestFactory($osQuery, Container::create());

        $factory->all(["id", "name"]);

        # We are testing the output of Mockery here.
        $this->assertTrue(true);
    }


    /**
     * Ensure our query contains the selected fields if specified.
     *
     * @dataProvider queryProvider
     *
     * @param string $query
     * @param array $data
     */
    public function testWhere(string $query, array $data): void
    {
        $query .= " WHERE (tests.id = '1') AND (tests.name = 'test')";

        $osQuery = $this->getOsQueryMock($query, $data);
        $factory = new TestFactory($osQuery, Container::create());

        $factory->where([
            "id" => 1,
            "name" => "test",
        ]);

        # We are testing the output of Mockery here.
        $this->assertTrue(true);
    }


    /**
     * Ensure we can get the model class.
     */
    public function testGetModelClass(): void
    {
        $factory = new TestFactory(new OsQuery(), Container::create());

        $this->assertSame(TestModel::class, $factory->getModelClass());
    }
}
