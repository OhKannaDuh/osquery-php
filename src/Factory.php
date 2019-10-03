<?php

namespace OhKannaDuh\OsQuery;

use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;
use NilPortugues\Sql\QueryBuilder\Manipulation\Select;
use Ramsey\Collection\Collection;

abstract class Factory implements FactoryInterface
{
    /** @var OsQuery */
    private $osQuery;

    /** @var GenericBuilder */
    private $builder;

    /** @var Container */
    private $container;


    /**
     * @param OsQuery $osQuery
     * @param Container $container
     * @param GenericBuilder $builder
     */
    public function __construct(OsQuery $osQuery, Container $container, GenericBuilder $builder = null)
    {
        $this->osQuery = $osQuery;
        $this->container = $container;

        if ($builder === null) {
            $builder = new GenericBuilder();
        }

        $this->builder = $builder;
    }


    /** @return Model */
    abstract protected function getModel(): Model;


    /** @inheritDoc */
    public function getModelClass(): string
    {
        return get_class($this->getModel());
    }



    /** @return string */
    private function getTable(): string
    {
        return $this->getModel()->getTable();
    }


    /**
     * @param string $query
     *
     * @return Collection
     */
    public function query(string $query): Collection
    {
        $results = $this->osQuery->query($query);

        return $this->fromArray($results);
    }


    /**
     * @param array<string,mixed> $data
     *
     * @return Collection
     */
    private function fromArray(array $data): Collection
    {
        $model = get_class($this->getModel());
        $collection = new Collection($model);

        foreach ($data as $datum) {
            $collection->add($model::load($datum, $this->container));
        }

        return $collection;
    }


    /** @inheritDoc */
    public function all(array $columns = null): Collection
    {
        return $this->where([], $columns);
    }


    /** @inheritDoc */
    public function where(array $where = [], array $columns = null): Collection
    {
        /** @var Select $query */
        $query = $this->getBuilder($columns);

        # Add where
        foreach ($where as $column => $value) {
            $query->where()->equals($column, $value)->end();
        }

        $query = $this->builder->write($query);
        $values = $this->builder->getValues();
        foreach ($values as $key => $value) {
            $query = str_replace($key, "'{$value}'", $query);
        }

        return $this->query($query);
    }


    /** @inheritDoc */
    public function getBuilder(array $columns = null): Select
    {
        return $this->builder->select($this->getTable(), $columns);
    }
}
