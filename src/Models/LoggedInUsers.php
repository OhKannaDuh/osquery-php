<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class LoggedInUsers extends Model
{
    /** @inheritDoc */
    protected $table = "logged_in_users";

    /** @inheritDoc */
    protected $attributes = [
        "type" => "string",
        "user" => "string",
        "tty" => "string",
        "host" => "string",
        "time" => "int",
        "pid" => "int",
        "sid" => "string",
        "registry_hive" => "string",
    ];


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
    public function getUser(): string
    {
        $value = $this->getAttribute("user");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("user", $value, "string");
    }


    /** @return string */
    public function getTty(): string
    {
        $value = $this->getAttribute("tty");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("tty", $value, "string");
    }


    /** @return string */
    public function getHost(): string
    {
        $value = $this->getAttribute("host");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("host", $value, "string");
    }


    /** @return int */
    public function getTime(): int
    {
        $value = $this->getAttribute("time");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("time", $value, "int");
    }


    /** @return int */
    public function getPid(): int
    {
        $value = $this->getAttribute("pid");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("pid", $value, "int");
    }


    /** @return string */
    public function getSid(): string
    {
        $value = $this->getAttribute("sid");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("sid", $value, "string");
    }


    /** @return string */
    public function getRegistryHive(): string
    {
        $value = $this->getAttribute("registry_hive");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("registry_hive", $value, "string");
    }
}
