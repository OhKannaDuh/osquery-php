<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class EtcServices extends Model
{
    /** @inheritDoc */
    protected $table = "etc_services";

    /** @inheritDoc */
    protected $attributes = [
        "name" => "string",
        "port" => "int",
        "protocol" => "string",
        "aliases" => "string",
        "comment" => "string",
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


    /** @return int */
    public function getPort(): int
    {
        $value = $this->getAttribute("port");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("port", $value, "int");
    }


    /** @return string */
    public function getProtocol(): string
    {
        $value = $this->getAttribute("protocol");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("protocol", $value, "string");
    }


    /** @return string */
    public function getAliases(): string
    {
        $value = $this->getAttribute("aliases");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("aliases", $value, "string");
    }


    /** @return string */
    public function getComment(): string
    {
        $value = $this->getAttribute("comment");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("comment", $value, "string");
    }
}
