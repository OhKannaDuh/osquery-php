<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Pivots\GroupsToUsers;
use Ramsey\Collection\Collection;

final class User extends Model
{
    /** @inheritDoc */
    protected $table = "user";

    /** @inheritDoc */
    protected $attributes = [
        "uid" => "int",
        "gid" => "int",
        "uid_signed" => "int",
        "gid_signed" => "int",
        "username" => "string",
        "description" => "string",
        "directory" => "string",
        "shell" => "string",
        "uuid" => "string",
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
    public function getUidSigned(): int
    {
        $value = $this->getAttribute("uid_signed");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("uid_signed", $value, "int");
    }


    /** @return int */
    public function getGidSigned(): int
    {
        $value = $this->getAttribute("gid_signed");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("gid_signed", $value, "int");
    }


    /** @return string */
    public function getUsername(): string
    {
        $value = $this->getAttribute("username");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("username", $value, "string");
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
    public function getDirectory(): string
    {
        $value = $this->getAttribute("directory");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("directory", $value, "string");
    }


    /** @return string */
    public function getShell(): string
    {
        $value = $this->getAttribute("shell");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("shell", $value, "string");
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


    /**
     * @return Collection
     */
    public function getGroups(): Collection
    {
        $pivot = $this->container->get(GroupsToUsers::class);

        return $pivot->getUsersGroups($this);
    }
}
