<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class AtomPackages extends Model
{
    /** @inheritDoc */
    protected $table = "atom_packages";

    /** @inheritDoc */
    protected $attributes = [
        "name" => "string",
        "version" => "string",
        "description" => "string",
        "path" => "string",
        "license" => "string",
        "homepage" => "string",
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


    /** @return string */
    public function getDescription(): string
    {
        $value = $this->getAttribute("description");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("description", $value, "string");
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
    public function getLicense(): string
    {
        $value = $this->getAttribute("license");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("license", $value, "string");
    }


    /** @return string */
    public function getHomepage(): string
    {
        $value = $this->getAttribute("homepage");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("homepage", $value, "string");
    }
}
