<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class ChromeExtensions extends Model
{
    /** @inheritDoc */
    protected $table = "chrome_extensions";

    /** @inheritDoc */
    protected $attributes = [
        "uid" => "int",
        "name" => "string",
        "profile" => "string",
        "identifier" => "string",
        "version" => "string",
        "description" => "string",
        "locale" => "string",
        "update_url" => "string",
        "author" => "string",
        "persistent" => "int",
        "path" => "string",
        "permissions" => "string",
    ];


    /** @return int */
    public function getUid(): int
    {
        $value = $this->getAttribute("uid");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("uid", $value, "int");
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
    public function getProfile(): string
    {
        $value = $this->getAttribute("profile");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("profile", $value, "string");
    }


    /** @return string */
    public function getIdentifier(): string
    {
        $value = $this->getAttribute("identifier");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("identifier", $value, "string");
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
    public function getLocale(): string
    {
        $value = $this->getAttribute("locale");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("locale", $value, "string");
    }


    /** @return string */
    public function getUpdateUrl(): string
    {
        $value = $this->getAttribute("update_url");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("update_url", $value, "string");
    }


    /** @return string */
    public function getAuthor(): string
    {
        $value = $this->getAttribute("author");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("author", $value, "string");
    }


    /** @return int */
    public function getPersistent(): int
    {
        $value = $this->getAttribute("persistent");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("persistent", $value, "int");
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
    public function getPermissions(): string
    {
        $value = $this->getAttribute("permissions");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("permissions", $value, "string");
    }
}
