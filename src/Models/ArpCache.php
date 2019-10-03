<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class ArpCache extends Model
{
    /** @inheritDoc */
    protected $table = "arp_cache";

    /** @inheritDoc */
    protected $attributes = [
        "address" => "string",
        "mac" => "string",
        "interface" => "string",
        "permanent" => "string",
    ];


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
    public function getMac(): string
    {
        $value = $this->getAttribute("mac");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("mac", $value, "string");
    }


    /** @return string */
    public function getInterface(): string
    {
        $value = $this->getAttribute("interface");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("interface", $value, "string");
    }


    /** @return string */
    public function getPermanent(): string
    {
        $value = $this->getAttribute("permanent");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("permanent", $value, "string");
    }
}
