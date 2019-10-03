<?php

namespace OhKannaDuh\OsQuery;

use NilPortugues\Sql\QueryBuilder\Manipulation\Select;
use Ramsey\Collection\Collection;

interface FactoryInterface
{


    /**
     * @return string
     */
    public function getModelClass(): string;


    /**
     * @param array<string>|null $columns
     *
     * @return Collection
     */
    public function all(array $columns = null): Collection;


    /**
     * @param array<string,mixed> $where
     * @param array<string>|null $columns
     *
     * @return Collection
     */
    public function where(array $where = [], array $columns = null): Collection;


    /**
     * @param string $query
     *
     * @return Collection
     */
    public function query(string $query): Collection;


    /**
     * @param array<string>|null $columns
     *
     * @return Select
     */
    public function getBuilder(array $columns = null): Select;
}
