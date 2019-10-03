<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class OsqueryInfo extends Model
{
    /** @inheritDoc */
    protected $table = "osquery_info";

    /** @inheritDoc */
    protected $attributes = [
        "pid" => "int",
        "uuid" => "string",
        "instance_id" => "string",
        "version" => "string",
        "config_hash" => "string",
        "config_valid" => "int",
        "extensions" => "string",
        "build_platform" => "string",
        "build_distro" => "string",
        "start_time" => "int",
        "watcher" => "int",
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
    public function getUuid(): string
    {
        $value = $this->getAttribute("uuid");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("uuid", $value, "string");
    }


    /** @return string */
    public function getInstanceId(): string
    {
        $value = $this->getAttribute("instance_id");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("instance_id", $value, "string");
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
    public function getConfigHash(): string
    {
        $value = $this->getAttribute("config_hash");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("config_hash", $value, "string");
    }


    /** @return int */
    public function getConfigValid(): int
    {
        $value = $this->getAttribute("config_valid");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("config_valid", $value, "int");
    }


    /** @return string */
    public function getExtensions(): string
    {
        $value = $this->getAttribute("extensions");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("extensions", $value, "string");
    }


    /** @return string */
    public function getBuildPlatform(): string
    {
        $value = $this->getAttribute("build_platform");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("build_platform", $value, "string");
    }


    /** @return string */
    public function getBuildDistro(): string
    {
        $value = $this->getAttribute("build_distro");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("build_distro", $value, "string");
    }


    /** @return int */
    public function getStartTime(): int
    {
        $value = $this->getAttribute("start_time");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("start_time", $value, "int");
    }


    /** @return int */
    public function getWatcher(): int
    {
        $value = $this->getAttribute("watcher");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("watcher", $value, "int");
    }
}
