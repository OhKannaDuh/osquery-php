<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class ProcessOpenSockets extends Model
{
    /** @inheritDoc */
    protected $table = "process_open_sockets";

    /** @inheritDoc */
    protected $attributes = [
        "pid" => "int",
        "fd" => "int",
        "socket" => "int",
        "family" => "int",
        "protocol" => "int",
        "local_address" => "string",
        "remote_address" => "string",
        "local_port" => "int",
        "remote_port" => "int",
        "path" => "string",
        "state" => "string",
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


    /** @return int */
    public function getFamily(): int
    {
        $value = $this->getAttribute("family");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("family", $value, "int");
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


    /** @return string */
    public function getLocalAddress(): string
    {
        $value = $this->getAttribute("local_address");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("local_address", $value, "string");
    }


    /** @return string */
    public function getRemoteAddress(): string
    {
        $value = $this->getAttribute("remote_address");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("remote_address", $value, "string");
    }


    /** @return int */
    public function getLocalPort(): int
    {
        $value = $this->getAttribute("local_port");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("local_port", $value, "int");
    }


    /** @return int */
    public function getRemotePort(): int
    {
        $value = $this->getAttribute("remote_port");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("remote_port", $value, "int");
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
    public function getState(): string
    {
        $value = $this->getAttribute("state");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("state", $value, "string");
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
