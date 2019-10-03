<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class OsqueryRegistry extends Model
{
    /** @inheritDoc */
    protected $table = "osquery_registry";

    /** @inheritDoc */
    protected $attributes = [
        "registry" => "string",
        "name" => "string",
        "owner_uuid" => "int",
        "internal" => "int",
        "active" => "int",
    ];


    /** @return string */
    public function getRegistry(): string
    {
        $value = $this->getAttribute("registry");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("registry", $value, "string");
    }


    /** @return string */
    public function getName(): string
    {
        $value = $this->getAttribute("name");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("name", $value, "string");
    }


    /** @return int */
    public function getOwnerUuid(): int
    {
        $value = $this->getAttribute("owner_uuid");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("owner_uuid", $value, "int");
    }


    /** @return int */
    public function getInternal(): int
    {
        $value = $this->getAttribute("internal");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("internal", $value, "int");
    }


    /** @return int */
    public function getActive(): int
    {
        $value = $this->getAttribute("active");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("active", $value, "int");
    }
}
