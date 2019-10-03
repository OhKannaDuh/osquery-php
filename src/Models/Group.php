<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Pivots\GroupsToUsers;
use Ramsey\Collection\Collection;

final class Group extends Model
{
    /** @inheritDoc */
    protected $table = "group";

    /** @inheritDoc */
    protected $attributes = [
        "gid" => "int",
        "gid_signed" => "int",
        "groupname" => "string",
    ];


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
    public function getGidSigned(): int
    {
        $value = $this->getAttribute("gid_signed");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("gid_signed", $value, "int");
    }


    /** @return string */
    public function getGroupname(): string
    {
        $value = $this->getAttribute("groupname");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("groupname", $value, "string");
    }


    /**
     * @return Collection
     */
    public function getUsers(): Collection
    {
        $pivot = $this->container->get(GroupsToUsers::class);

        return $pivot->getGroupsUsers($this);
    }
}
