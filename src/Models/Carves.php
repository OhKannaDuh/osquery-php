<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class Carves extends Model
{
    /** @inheritDoc */
    protected $table = "carves";

    /** @inheritDoc */
    protected $attributes = [
        "time" => "int",
        "sha256" => "string",
        "size" => "int",
        "path" => "string",
        "status" => "string",
        "carve_guid" => "string",
        "carve" => "int",
    ];


    /** @return int */
    public function getTime(): int
    {
        $value = $this->getAttribute("time");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("time", $value, "int");
    }


    /** @return string */
    public function getSha256(): string
    {
        $value = $this->getAttribute("sha256");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("sha256", $value, "string");
    }


    /** @return int */
    public function getSize(): int
    {
        $value = $this->getAttribute("size");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("size", $value, "int");
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
    public function getStatus(): string
    {
        $value = $this->getAttribute("status");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("status", $value, "string");
    }


    /** @return string */
    public function getCarveGuid(): string
    {
        $value = $this->getAttribute("carve_guid");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("carve_guid", $value, "string");
    }


    /** @return int */
    public function getCarve(): int
    {
        $value = $this->getAttribute("carve");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("carve", $value, "int");
    }
}
