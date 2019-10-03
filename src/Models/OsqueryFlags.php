<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class OsqueryFlags extends Model
{
    /** @inheritDoc */
    protected $table = "osquery_flags";

    /** @inheritDoc */
    protected $attributes = [
        "name" => "string",
        "type" => "string",
        "description" => "string",
        "default_value" => "string",
        "value" => "string",
        "shell_only" => "int",
    ];


    /** @return string */
    public function getName(): string
    {
        $value = $this->getAttribute("name");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("name", $value, "string");
    }


    /** @return string */
    public function getType(): string
    {
        $value = $this->getAttribute("type");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("type", $value, "string");
    }


    /** @return string */
    public function getDescription(): string
    {
        $value = $this->getAttribute("description");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("description", $value, "string");
    }


    /** @return string */
    public function getDefaultValue(): string
    {
        $value = $this->getAttribute("default_value");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("default_value", $value, "string");
    }


    /** @return string */
    public function getValue(): string
    {
        $value = $this->getAttribute("value");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("value", $value, "string");
    }


    /** @return int */
    public function getShellOnly(): int
    {
        $value = $this->getAttribute("shell_only");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("shell_only", $value, "int");
    }
}
