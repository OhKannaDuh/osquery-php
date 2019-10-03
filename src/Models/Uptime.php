<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class Uptime extends Model
{
    /** @inheritDoc */
    protected $table = "uptime";

    /** @inheritDoc */
    protected $attributes = [
        "days" => "int",
        "hours" => "int",
        "minutes" => "int",
        "seconds" => "int",
        "total_seconds" => "int",
    ];


    /** @return int */
    public function getDays(): int
    {
        $value = $this->getAttribute("days");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("days", $value, "int");
    }


    /** @return int */
    public function getHours(): int
    {
        $value = $this->getAttribute("hours");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("hours", $value, "int");
    }


    /** @return int */
    public function getMinutes(): int
    {
        $value = $this->getAttribute("minutes");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("minutes", $value, "int");
    }


    /** @return int */
    public function getSeconds(): int
    {
        $value = $this->getAttribute("seconds");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("seconds", $value, "int");
    }


    /** @return int */
    public function getTotalSeconds(): int
    {
        $value = $this->getAttribute("total_seconds");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("total_seconds", $value, "int");
    }
}
