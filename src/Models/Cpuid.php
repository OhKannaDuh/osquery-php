<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class Cpuid extends Model
{
    /** @inheritDoc */
    protected $table = "cpuid";

    /** @inheritDoc */
    protected $attributes = [
        "feature" => "string",
        "value" => "string",
        "output_register" => "string",
        "output_bit" => "int",
        "input_eax" => "string",
    ];


    /** @return string */
    public function getFeature(): string
    {
        $value = $this->getAttribute("feature");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("feature", $value, "string");
    }


    /** @return string */
    public function getValue(): string
    {
        $value = $this->getAttribute("value");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("value", $value, "string");
    }


    /** @return string */
    public function getOutputRegister(): string
    {
        $value = $this->getAttribute("output_register");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("output_register", $value, "string");
    }


    /** @return int */
    public function getOutputBit(): int
    {
        $value = $this->getAttribute("output_bit");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("output_bit", $value, "int");
    }


    /** @return string */
    public function getInputEax(): string
    {
        $value = $this->getAttribute("input_eax");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("input_eax", $value, "string");
    }
}
