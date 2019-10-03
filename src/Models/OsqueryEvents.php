<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class OsqueryEvents extends Model
{
    /** @inheritDoc */
    protected $table = "osquery_events";

    /** @inheritDoc */
    protected $attributes = [
        "name" => "string",
        "publisher" => "string",
        "type" => "string",
        "subscriptions" => "int",
        "events" => "int",
        "refreshes" => "int",
        "active" => "int",
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


    /** @return string */
    public function getPublisher(): string
    {
        $value = $this->getAttribute("publisher");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("publisher", $value, "string");
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
    public function getSubscriptions(): int
    {
        $value = $this->getAttribute("subscriptions");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("subscriptions", $value, "int");
    }


    /** @return int */
    public function getEvents(): int
    {
        $value = $this->getAttribute("events");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("events", $value, "int");
    }


    /** @return int */
    public function getRefreshes(): int
    {
        $value = $this->getAttribute("refreshes");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("refreshes", $value, "int");
    }


    /** @return int */
    public function getActive(): int
    {
        $value = $this->getAttribute("active");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("active", $value, "int");
    }
}
