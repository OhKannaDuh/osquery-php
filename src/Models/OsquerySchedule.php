<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class OsquerySchedule extends Model
{
    /** @inheritDoc */
    protected $table = "osquery_schedule";

    /** @inheritDoc */
    protected $attributes = [
        "name" => "string",
        "query" => "string",
        "interval" => "int",
        "executions" => "int",
        "last_executed" => "int",
        "blacklisted" => "int",
        "output_size" => "int",
        "wall_time" => "int",
        "user_time" => "int",
        "system_time" => "int",
        "average_memory" => "int",
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
    public function getQuery(): string
    {
        $value = $this->getAttribute("query");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("query", $value, "string");
    }


    /** @return int */
    public function getInterval(): int
    {
        $value = $this->getAttribute("interval");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("interval", $value, "int");
    }


    /** @return int */
    public function getExecutions(): int
    {
        $value = $this->getAttribute("executions");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("executions", $value, "int");
    }


    /** @return int */
    public function getLastExecuted(): int
    {
        $value = $this->getAttribute("last_executed");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("last_executed", $value, "int");
    }


    /** @return int */
    public function getBlacklisted(): int
    {
        $value = $this->getAttribute("blacklisted");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("blacklisted", $value, "int");
    }


    /** @return int */
    public function getOutputSize(): int
    {
        $value = $this->getAttribute("output_size");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("output_size", $value, "int");
    }


    /** @return int */
    public function getWallTime(): int
    {
        $value = $this->getAttribute("wall_time");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("wall_time", $value, "int");
    }


    /** @return int */
    public function getUserTime(): int
    {
        $value = $this->getAttribute("user_time");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("user_time", $value, "int");
    }


    /** @return int */
    public function getSystemTime(): int
    {
        $value = $this->getAttribute("system_time");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("system_time", $value, "int");
    }


    /** @return int */
    public function getAverageMemory(): int
    {
        $value = $this->getAttribute("average_memory");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("average_memory", $value, "int");
    }
}
