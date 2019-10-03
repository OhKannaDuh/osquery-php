<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class SystemInfo extends Model
{
    /** @inheritDoc */
    protected $table = "system_info";

    /** @inheritDoc */
    protected $attributes = [
        "hostname" => "string",
        "uuid" => "string",
        "cpu_type" => "string",
        "cpu_subtype" => "string",
        "cpu_brand" => "string",
        "cpu_physical_cores" => "int",
        "cpu_logical_cores" => "int",
        "cpu_microcode" => "string",
        "physical_memory" => "int",
        "hardware_vendor" => "string",
        "hardware_model" => "string",
        "hardware_version" => "string",
        "hardware_serial" => "string",
        "computer_name" => "string",
        "local_hostname" => "string",
    ];


    /** @return string */
    public function getHostname(): string
    {
        $value = $this->getAttribute("hostname");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("hostname", $value, "string");
    }


    /** @return string */
    public function getUuid(): string
    {
        $value = $this->getAttribute("uuid");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("uuid", $value, "string");
    }


    /** @return string */
    public function getCpuType(): string
    {
        $value = $this->getAttribute("cpu_type");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("cpu_type", $value, "string");
    }


    /** @return string */
    public function getCpuSubtype(): string
    {
        $value = $this->getAttribute("cpu_subtype");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("cpu_subtype", $value, "string");
    }


    /** @return string */
    public function getCpuBrand(): string
    {
        $value = $this->getAttribute("cpu_brand");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("cpu_brand", $value, "string");
    }


    /** @return int */
    public function getCpuPhysicalCores(): int
    {
        $value = $this->getAttribute("cpu_physical_cores");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("cpu_physical_cores", $value, "int");
    }


    /** @return int */
    public function getCpuLogicalCores(): int
    {
        $value = $this->getAttribute("cpu_logical_cores");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("cpu_logical_cores", $value, "int");
    }


    /** @return string */
    public function getCpuMicrocode(): string
    {
        $value = $this->getAttribute("cpu_microcode");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("cpu_microcode", $value, "string");
    }


    /** @return int */
    public function getPhysicalMemory(): int
    {
        $value = $this->getAttribute("physical_memory");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("physical_memory", $value, "int");
    }


    /** @return string */
    public function getHardwareVendor(): string
    {
        $value = $this->getAttribute("hardware_vendor");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("hardware_vendor", $value, "string");
    }


    /** @return string */
    public function getHardwareModel(): string
    {
        $value = $this->getAttribute("hardware_model");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("hardware_model", $value, "string");
    }


    /** @return string */
    public function getHardwareVersion(): string
    {
        $value = $this->getAttribute("hardware_version");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("hardware_version", $value, "string");
    }


    /** @return string */
    public function getHardwareSerial(): string
    {
        $value = $this->getAttribute("hardware_serial");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("hardware_serial", $value, "string");
    }


    /** @return string */
    public function getComputerName(): string
    {
        $value = $this->getAttribute("computer_name");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("computer_name", $value, "string");
    }


    /** @return string */
    public function getLocalHostname(): string
    {
        $value = $this->getAttribute("local_hostname");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("local_hostname", $value, "string");
    }
}
