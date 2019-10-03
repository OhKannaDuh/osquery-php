<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class OsqueryPacks extends Model
{
    /** @inheritDoc */
    protected $table = "osquery_packs";

    /** @inheritDoc */
    protected $attributes = [
        "name" => "string",
        "platform" => "string",
        "version" => "string",
        "shard" => "int",
        "discovery_cache_hits" => "int",
        "discovery_executions" => "int",
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
    public function getPlatform(): string
    {
        $value = $this->getAttribute("platform");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("platform", $value, "string");
    }


    /** @return string */
    public function getVersion(): string
    {
        $value = $this->getAttribute("version");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("version", $value, "string");
    }


    /** @return int */
    public function getShard(): int
    {
        $value = $this->getAttribute("shard");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("shard", $value, "int");
    }


    /** @return int */
    public function getDiscoveryCacheHits(): int
    {
        $value = $this->getAttribute("discovery_cache_hits");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("discovery_cache_hits", $value, "int");
    }


    /** @return int */
    public function getDiscoveryExecutions(): int
    {
        $value = $this->getAttribute("discovery_executions");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("discovery_executions", $value, "int");
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
