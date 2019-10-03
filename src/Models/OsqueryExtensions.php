<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class OsqueryExtensions extends Model
{
    /** @inheritDoc */
    protected $table = "osquery_extensions";

    /** @inheritDoc */
    protected $attributes = [
        "uuid" => "int",
        "name" => "string",
        "version" => "string",
        "sdk_version" => "string",
        "path" => "string",
        "type" => "string",
    ];


    /** @return int */
    public function getUuid(): int
    {
        $value = $this->getAttribute("uuid");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("uuid", $value, "int");
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


    /** @return string */
    public function getVersion(): string
    {
        $value = $this->getAttribute("version");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("version", $value, "string");
    }


    /** @return string */
    public function getSdkVersion(): string
    {
        $value = $this->getAttribute("sdk_version");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("sdk_version", $value, "string");
    }


    /** @return string */
    public function getPath(): string
    {
        $value = $this->getAttribute("path");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("path", $value, "string");
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
}
