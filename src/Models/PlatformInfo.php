<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class PlatformInfo extends Model
{
    /** @inheritDoc */
    protected $table = "platform_info";

    /** @inheritDoc */
    protected $attributes = [
        "vendor" => "string",
        "version" => "string",
        "date" => "string",
        "revision" => "string",
        "address" => "string",
        "size" => "string",
        "volume_size" => "int",
        "extra" => "string",
    ];


    /** @return string */
    public function getVendor(): string
    {
        $value = $this->getAttribute("vendor");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("vendor", $value, "string");
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
    public function getDate(): string
    {
        $value = $this->getAttribute("date");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("date", $value, "string");
    }


    /** @return string */
    public function getRevision(): string
    {
        $value = $this->getAttribute("revision");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("revision", $value, "string");
    }


    /** @return string */
    public function getAddress(): string
    {
        $value = $this->getAttribute("address");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("address", $value, "string");
    }


    /** @return string */
    public function getSize(): string
    {
        $value = $this->getAttribute("size");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("size", $value, "string");
    }


    /** @return int */
    public function getVolumeSize(): int
    {
        $value = $this->getAttribute("volume_size");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("volume_size", $value, "int");
    }


    /** @return string */
    public function getExtra(): string
    {
        $value = $this->getAttribute("extra");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("extra", $value, "string");
    }
}
