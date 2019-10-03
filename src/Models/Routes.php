<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class Routes extends Model
{
    /** @inheritDoc */
    protected $table = "routes";

    /** @inheritDoc */
    protected $attributes = [
        "destination" => "string",
        "netmask" => "int",
        "gateway" => "string",
        "source" => "string",
        "flags" => "int",
        "interface" => "string",
        "mtu" => "int",
        "metric" => "int",
        "type" => "string",
        "hopcount" => "int",
    ];


    /** @return string */
    public function getDestination(): string
    {
        $value = $this->getAttribute("destination");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("destination", $value, "string");
    }


    /** @return int */
    public function getNetmask(): int
    {
        $value = $this->getAttribute("netmask");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("netmask", $value, "int");
    }


    /** @return string */
    public function getGateway(): string
    {
        $value = $this->getAttribute("gateway");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("gateway", $value, "string");
    }


    /** @return string */
    public function getSource(): string
    {
        $value = $this->getAttribute("source");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("source", $value, "string");
    }


    /** @return int */
    public function getFlags(): int
    {
        $value = $this->getAttribute("flags");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("flags", $value, "int");
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


    /** @return int */
    public function getMtu(): int
    {
        $value = $this->getAttribute("mtu");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("mtu", $value, "int");
    }


    /** @return int */
    public function getMetric(): int
    {
        $value = $this->getAttribute("metric");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("metric", $value, "int");
    }


    /** @return string */
    public function getType(): string
    {
        $value = $this->getAttribute("type");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("type", $value, "string");
    }


    /** @return int */
    public function getHopcount(): int
    {
        $value = $this->getAttribute("hopcount");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("hopcount", $value, "int");
    }
}
