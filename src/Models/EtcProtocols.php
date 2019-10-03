<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class EtcProtocols extends Model
{
    /** @inheritDoc */
    protected $table = "etc_protocols";

    /** @inheritDoc */
    protected $attributes = [
        "name" => "string",
        "number" => "int",
        "alias" => "string",
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
    public function getNumber(): int
    {
        $value = $this->getAttribute("number");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("number", $value, "int");
    }


    /** @return string */
    public function getAlias(): string
    {
        $value = $this->getAttribute("alias");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("alias", $value, "string");
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
