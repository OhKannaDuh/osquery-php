<?php

namespace OhKannaDuh\OsQuery;

use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;

abstract class Pivot
{
    /** @var string */
    protected $table = "";

    /** @var OsQuery */
    private $osQuery;

    /** @var GenericBuilder */
    private $builder;

    /** @var Container */
    protected $container;


    /**
     * @param OsQuery $osQuery
     * @param GenericBuilder $builder
     */
    public function __construct(OsQuery $osQuery, GenericBuilder $builder, Container $container)
    {
        if ($this->table === "") {
            // exception
        }

        $this->osQuery = $osQuery;
        $this->builder = $builder;
        $this->container = $container;
    }


    /**
     * @param array $where
     * @param array $columns
     *
     * @return array
     */
    protected function where(array $where, array $columns = null): array
    {

        $query = $this->builder->select($this->table, $columns);
        foreach ($where as $column => $value) {
            $query->where()->equals($column, $value)->end();
        }

        $query = $this->builder->write($query);
        $values = $this->builder->getValues();
        foreach ($values as $key => $value) {
            $query = str_replace($key, "'{$value}'", $query);
        }

        return $this->osQuery->query($query);
    }
}
