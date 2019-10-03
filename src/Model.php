<?php

namespace OhKannaDuh\OsQuery;

use OhKannaDuh\OsQuery\Exceptions\AttributeNotFound;
use OhKannaDuh\OsQuery\Exceptions\AttributeTypeNotFound;

abstract class Model
{
    /** @var string */
    protected $table = "";

    /** @var array<string,string> */
    protected $attributes = [];

    /** @var array<string,mixed> */
    private $data = [];

    /** @var Container; */
    protected $container;


    /**
     * Load a copy of this model with the given data and container.
     *
     * @param array<string,string|int|bool> $data
     *
     * @return static
     */
    public static function load(array $data, Container $container)
    {
        $model = new static();
        $model->container = $container;

        foreach ($data as $attribute => $value) {
            $model->data[$attribute] = $value;
        }

        return $model;
    }


    /**
     * Checks if the given attribute key is on this model and is typed.
     *
     * @param string $attribute
     *
     * @return bool
     */
    public function hasAttribute(string $attribute): bool
    {
        return (
            array_key_exists($attribute, $this->data) === true &&
            array_key_exists($attribute, $this->attributes) === true
        );
    }


    /**
     * Returns the requested attribute if it exists.
     *
     * @param string $attribute
     *
     * @return string|int|bool
     *
     * @throws AttributeNotFound
     * @throws AttributeTypeNotFound
     */
    public function getAttribute(string $attribute)
    {
        if (array_key_exists($attribute, $this->data) === false) {
            throw new AttributeNotFound($attribute, get_class($this), $this->data);
        }

        if (array_key_exists($attribute, $this->attributes) === false) {
            throw new AttributeTypeNotFound($attribute, get_class($this), $this->attributes);
        }

        $datum = $this->data[$attribute];
        $type = $this->attributes[$attribute];

        switch ($type) {
            case "int":
                return (int) $datum;
            case "bool":
                return (bool) $datum;
            default:
                return $datum;
        }
    }


    /**
     * Gets the table name for this model.
     *
     * @return string
     */
    public function getTable(): string
    {
        return $this->table;
    }
}
