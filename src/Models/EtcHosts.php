<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class EtcHosts extends Model
{
    /** @inheritDoc */
    protected $table = "etc_hosts";

    /** @inheritDoc */
    protected $attributes = [
        "address" => "string",
        "hostnames" => "string",
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
    public function getHostnames(): string
    {
        $value = $this->getAttribute("hostnames");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("hostnames", $value, "string");
    }
}
