<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class ProcessMemoryMap extends Model
{
    /** @inheritDoc */
    protected $table = "process_memory_map";

    /** @inheritDoc */
    protected $attributes = [
        "pid" => "int",
        "start" => "string",
        "end" => "string",
        "permissions" => "string",
        "offset" => "int",
        "device" => "string",
        "inode" => "int",
        "path" => "string",
        "pseudo" => "int",
    ];


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
    public function getStart(): string
    {
        $value = $this->getAttribute("start");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("start", $value, "string");
    }


    /** @return string */
    public function getEnd(): string
    {
        $value = $this->getAttribute("end");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("end", $value, "string");
    }


    /** @return string */
    public function getPermissions(): string
    {
        $value = $this->getAttribute("permissions");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("permissions", $value, "string");
    }


    /** @return int */
    public function getOffset(): int
    {
        $value = $this->getAttribute("offset");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("offset", $value, "int");
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


    /** @return int */
    public function getInode(): int
    {
        $value = $this->getAttribute("inode");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("inode", $value, "int");
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


    /** @return int */
    public function getPseudo(): int
    {
        $value = $this->getAttribute("pseudo");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("pseudo", $value, "int");
    }
}
