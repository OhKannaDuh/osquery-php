<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class OsVersion extends Model
{
    /** @inheritDoc */
    protected $table = "os_version";

    /** @inheritDoc */
    protected $attributes = [
        "name" => "string",
        "version" => "string",
        "major" => "int",
        "minor" => "int",
        "patch" => "int",
        "build" => "string",
        "platform" => "string",
        "platform_like" => "string",
        "codename" => "string",
        "install_date" => "string",
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
    public function getVersion(): string
    {
        $value = $this->getAttribute("version");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("version", $value, "string");
    }


    /** @return int */
    public function getMajor(): int
    {
        $value = $this->getAttribute("major");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("major", $value, "int");
    }


    /** @return int */
    public function getMinor(): int
    {
        $value = $this->getAttribute("minor");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("minor", $value, "int");
    }


    /** @return int */
    public function getPatch(): int
    {
        $value = $this->getAttribute("patch");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("patch", $value, "int");
    }


    /** @return string */
    public function getBuild(): string
    {
        $value = $this->getAttribute("build");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("build", $value, "string");
    }


    /** @return string */
    public function getPlatform(): string
    {
        $value = $this->getAttribute("platform");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("platform", $value, "string");
    }


    /** @return string */
    public function getPlatformLike(): string
    {
        $value = $this->getAttribute("platform_like");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("platform_like", $value, "string");
    }


    /** @return string */
    public function getCodename(): string
    {
        $value = $this->getAttribute("codename");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("codename", $value, "string");
    }


    /** @return string */
    public function getInstallDate(): string
    {
        $value = $this->getAttribute("install_date");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("install_date", $value, "string");
    }
}
