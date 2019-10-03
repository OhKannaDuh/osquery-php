<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class Hash extends Model
{
    /** @inheritDoc */
    protected $table = "hash";

    /** @inheritDoc */
    protected $attributes = [
        "path" => "string",
        "directory" => "string",
        "md5" => "string",
        "sha1" => "string",
        "sha256" => "string",
        "ssdeep" => "string",
    ];


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
    public function getDirectory(): string
    {
        $value = $this->getAttribute("directory");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("directory", $value, "string");
    }


    /** @return string */
    public function getMd5(): string
    {
        $value = $this->getAttribute("md5");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("md5", $value, "string");
    }


    /** @return string */
    public function getSha1(): string
    {
        $value = $this->getAttribute("sha1");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("sha1", $value, "string");
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


    /** @return string */
    public function getSsdeep(): string
    {
        $value = $this->getAttribute("ssdeep");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("ssdeep", $value, "string");
    }
}
