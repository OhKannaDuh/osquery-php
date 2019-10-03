<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class Time extends Model
{
    /** @inheritDoc */
    protected $table = "time";

    /** @inheritDoc */
    protected $attributes = [
        "weekday" => "string",
        "year" => "int",
        "month" => "int",
        "day" => "int",
        "hour" => "int",
        "minutes" => "int",
        "seconds" => "int",
        "timezone" => "string",
        "local_time" => "int",
        "local_timezone" => "string",
        "unix_time" => "int",
        "timestamp" => "string",
        "datetime" => "string",
        "iso_8601" => "string",
        "win_timestamp" => "int",
    ];


    /** @return string */
    public function getWeekday(): string
    {
        $value = $this->getAttribute("weekday");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("weekday", $value, "string");
    }


    /** @return int */
    public function getYear(): int
    {
        $value = $this->getAttribute("year");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("year", $value, "int");
    }


    /** @return int */
    public function getMonth(): int
    {
        $value = $this->getAttribute("month");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("month", $value, "int");
    }


    /** @return int */
    public function getDay(): int
    {
        $value = $this->getAttribute("day");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("day", $value, "int");
    }


    /** @return int */
    public function getHour(): int
    {
        $value = $this->getAttribute("hour");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("hour", $value, "int");
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


    /** @return string */
    public function getTimezone(): string
    {
        $value = $this->getAttribute("timezone");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("timezone", $value, "string");
    }


    /** @return int */
    public function getLocalTime(): int
    {
        $value = $this->getAttribute("local_time");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("local_time", $value, "int");
    }


    /** @return string */
    public function getLocalTimezone(): string
    {
        $value = $this->getAttribute("local_timezone");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("local_timezone", $value, "string");
    }


    /** @return int */
    public function getUnixTime(): int
    {
        $value = $this->getAttribute("unix_time");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("unix_time", $value, "int");
    }


    /** @return string */
    public function getTimestamp(): string
    {
        $value = $this->getAttribute("timestamp");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("timestamp", $value, "string");
    }


    /** @return string */
    public function getDatetime(): string
    {
        $value = $this->getAttribute("datetime");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("datetime", $value, "string");
    }


    /** @return string */
    public function getIso8601(): string
    {
        $value = $this->getAttribute("iso_8601");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("iso_8601", $value, "string");
    }


    /** @return int */
    public function getWinTimestamp(): int
    {
        $value = $this->getAttribute("win_timestamp");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("win_timestamp", $value, "int");
    }
}
