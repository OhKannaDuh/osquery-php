<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class KernalInfo extends Model
{
    /** @inheritDoc */
    protected $table = "kernal_info";

    /** @inheritDoc */
    protected $attributes = [
        "version" => "string",
        "arguments" => "string",
        "path" => "string",
        "device" => "string",
    ];


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
    public function getArguments(): string
    {
        $value = $this->getAttribute("arguments");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("arguments", $value, "string");
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
    public function getDevice(): string
    {
        $value = $this->getAttribute("device");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("device", $value, "string");
    }
}
