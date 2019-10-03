<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class ListeningPorts extends Model
{
    /** @inheritDoc */
    protected $table = "listening_ports";

    /** @inheritDoc */
    protected $attributes = [
        "pid" => "int",
        "port" => "int",
        "protocol" => "int",
        "family" => "int",
        "address" => "string",
        "fd" => "int",
        "socket" => "int",
        "path" => "string",
        "net_namespace" => "string",
    ];


    /** @return int */
    public function getPid(): int
    {
        $value = $this->getAttribute("pid");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("pid", $value, "int");
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


    /** @return int */
    public function getProtocol(): int
    {
        $value = $this->getAttribute("protocol");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("protocol", $value, "int");
    }


    /** @return int */
    public function getFamily(): int
    {
        $value = $this->getAttribute("family");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("family", $value, "int");
    }


    /** @return string */
    public function getAddress(): string
    {
        $value = $this->getAttribute("address");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("address", $value, "string");
    }


    /** @return int */
    public function getFd(): int
    {
        $value = $this->getAttribute("fd");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("fd", $value, "int");
    }


    /** @return int */
    public function getSocket(): int
    {
        $value = $this->getAttribute("socket");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("socket", $value, "int");
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
    public function getNetNamespace(): string
    {
        $value = $this->getAttribute("net_namespace");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("net_namespace", $value, "string");
    }
}
