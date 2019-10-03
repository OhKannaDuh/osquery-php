<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class Processes extends Model
{
    /** @inheritDoc */
    protected $table = "processes";

    /** @inheritDoc */
    protected $attributes = [
        "pid" => "int",
        "name" => "string",
        "path" => "string",
        "cmdline" => "string",
        "state" => "string",
        "cwd" => "string",
        "root" => "string",
        "uid" => "int",
        "gid" => "int",
        "euid" => "int",
        "egid" => "int",
        "suid" => "int",
        "sgid" => "int",
        "on_disk" => "int",
        "wired_size" => "int",
        "resident_size" => "int",
        "total_size" => "int",
        "user_time" => "int",
        "system_time" => "int",
        "disk_bytes_read" => "int",
        "disk_bytes_written" => "int",
        "start_time" => "int",
        "parent" => "int",
        "pgroup" => "int",
        "threads" => "int",
        "nice" => "int",
        "is_elevated_token" => "int",
        "elapsed_time" => "int",
        "handle_count" => "int",
        "percent_processor_time" => "int",
        "upid" => "int",
        "uppid" => "int",
        "cpu_type" => "int",
        "cpu_subtype" => "int",
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
    public function getName(): string
    {
        $value = $this->getAttribute("name");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("name", $value, "string");
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
    public function getCmdline(): string
    {
        $value = $this->getAttribute("cmdline");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("cmdline", $value, "string");
    }


    /** @return string */
    public function getState(): string
    {
        $value = $this->getAttribute("state");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("state", $value, "string");
    }


    /** @return string */
    public function getCwd(): string
    {
        $value = $this->getAttribute("cwd");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("cwd", $value, "string");
    }


    /** @return string */
    public function getRoot(): string
    {
        $value = $this->getAttribute("root");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("root", $value, "string");
    }


    /** @return int */
    public function getUid(): int
    {
        $value = $this->getAttribute("uid");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("uid", $value, "int");
    }


    /** @return int */
    public function getGid(): int
    {
        $value = $this->getAttribute("gid");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("gid", $value, "int");
    }


    /** @return int */
    public function getEuid(): int
    {
        $value = $this->getAttribute("euid");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("euid", $value, "int");
    }


    /** @return int */
    public function getEgid(): int
    {
        $value = $this->getAttribute("egid");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("egid", $value, "int");
    }


    /** @return int */
    public function getSuid(): int
    {
        $value = $this->getAttribute("suid");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("suid", $value, "int");
    }


    /** @return int */
    public function getSgid(): int
    {
        $value = $this->getAttribute("sgid");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("sgid", $value, "int");
    }


    /** @return int */
    public function getOnDisk(): int
    {
        $value = $this->getAttribute("on_disk");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("on_disk", $value, "int");
    }


    /** @return int */
    public function getWiredSize(): int
    {
        $value = $this->getAttribute("wired_size");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("wired_size", $value, "int");
    }


    /** @return int */
    public function getResidentSize(): int
    {
        $value = $this->getAttribute("resident_size");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("resident_size", $value, "int");
    }


    /** @return int */
    public function getTotalSize(): int
    {
        $value = $this->getAttribute("total_size");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("total_size", $value, "int");
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
    public function getDiskBytesRead(): int
    {
        $value = $this->getAttribute("disk_bytes_read");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("disk_bytes_read", $value, "int");
    }


    /** @return int */
    public function getDiskBytesWritten(): int
    {
        $value = $this->getAttribute("disk_bytes_written");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("disk_bytes_written", $value, "int");
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
    public function getParent(): int
    {
        $value = $this->getAttribute("parent");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("parent", $value, "int");
    }


    /** @return int */
    public function getPgroup(): int
    {
        $value = $this->getAttribute("pgroup");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("pgroup", $value, "int");
    }


    /** @return int */
    public function getThreads(): int
    {
        $value = $this->getAttribute("threads");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("threads", $value, "int");
    }


    /** @return int */
    public function getNice(): int
    {
        $value = $this->getAttribute("nice");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("nice", $value, "int");
    }


    /** @return int */
    public function getIsElevatedToken(): int
    {
        $value = $this->getAttribute("is_elevated_token");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("is_elevated_token", $value, "int");
    }


    /** @return int */
    public function getElapsedTime(): int
    {
        $value = $this->getAttribute("elapsed_time");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("elapsed_time", $value, "int");
    }


    /** @return int */
    public function getHandleCount(): int
    {
        $value = $this->getAttribute("handle_count");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("handle_count", $value, "int");
    }


    /** @return int */
    public function getPercentProcessorTime(): int
    {
        $value = $this->getAttribute("percent_processor_time");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("percent_processor_time", $value, "int");
    }


    /** @return int */
    public function getUpid(): int
    {
        $value = $this->getAttribute("upid");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("upid", $value, "int");
    }


    /** @return int */
    public function getUppid(): int
    {
        $value = $this->getAttribute("uppid");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("uppid", $value, "int");
    }


    /** @return int */
    public function getCpuType(): int
    {
        $value = $this->getAttribute("cpu_type");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("cpu_type", $value, "int");
    }


    /** @return int */
    public function getCpuSubtype(): int
    {
        $value = $this->getAttribute("cpu_subtype");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("cpu_subtype", $value, "int");
    }
}
