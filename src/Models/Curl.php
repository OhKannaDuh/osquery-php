<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class Curl extends Model
{
    /** @inheritDoc */
    protected $table = "curl";

    /** @inheritDoc */
    protected $attributes = [
        "url" => "string",
        "method" => "string",
        "user_agent" => "string",
        "response_code" => "int",
        "round_trip_time" => "int",
        "bytes" => "int",
        "result" => "string",
    ];


    /** @return string */
    public function getUrl(): string
    {
        $value = $this->getAttribute("url");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("url", $value, "string");
    }


    /** @return string */
    public function getMethod(): string
    {
        $value = $this->getAttribute("method");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("method", $value, "string");
    }


    /** @return string */
    public function getUserAgent(): string
    {
        $value = $this->getAttribute("user_agent");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("user_agent", $value, "string");
    }


    /** @return int */
    public function getResponseCode(): int
    {
        $value = $this->getAttribute("response_code");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("response_code", $value, "int");
    }


    /** @return int */
    public function getRoundTripTime(): int
    {
        $value = $this->getAttribute("round_trip_time");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("round_trip_time", $value, "int");
    }


    /** @return int */
    public function getBytes(): int
    {
        $value = $this->getAttribute("bytes");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("bytes", $value, "int");
    }


    /** @return string */
    public function getResult(): string
    {
        $value = $this->getAttribute("result");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("result", $value, "string");
    }
}
