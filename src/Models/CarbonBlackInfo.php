<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class CarbonBlackInfo extends Model
{
    /** @inheritDoc */
    protected $table = "carbon_black_info";

    /** @inheritDoc */
    protected $attributes = [
        "sensor_id" => "int",
        "config_name" => "string",
        "collect_store_files" => "int",
        "collect_module_loads" => "int",
        "collect_module_info" => "int",
        "collect_file_mods" => "int",
        "collect_reg_mods" => "int",
        "collect_net_conns" => "int",
        "collect_processes" => "int",
        "collect_cross_processes" => "int",
        "collect_emet_events" => "int",
        "collect_data_file_writes" => "int",
        "collect_process_user_con" => "int",
        "collect_sensor_operations" => "int",
        "log_file_disk_quota_mb" => "int",
        "log_file_disk_quota_percentage" => "int",
        "protection_disabled" => "int",
        "sensor_ip_addr" => "string",
        "sensor_backend_server" => "string",
        "event_queue" => "int",
        "binary_queue" => "int",
    ];


    /** @return int */
    public function getSensorId(): int
    {
        $value = $this->getAttribute("sensor_id");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("sensor_id", $value, "int");
    }


    /** @return string */
    public function getConfigName(): string
    {
        $value = $this->getAttribute("config_name");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("config_name", $value, "string");
    }


    /** @return int */
    public function getCollectStoreFiles(): int
    {
        $value = $this->getAttribute("collect_store_files");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("collect_store_files", $value, "int");
    }


    /** @return int */
    public function getCollectModuleLoads(): int
    {
        $value = $this->getAttribute("collect_module_loads");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("collect_module_loads", $value, "int");
    }


    /** @return int */
    public function getCollectModuleInfo(): int
    {
        $value = $this->getAttribute("collect_module_info");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("collect_module_info", $value, "int");
    }


    /** @return int */
    public function getCollectFileMods(): int
    {
        $value = $this->getAttribute("collect_file_mods");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("collect_file_mods", $value, "int");
    }


    /** @return int */
    public function getCollectRegMods(): int
    {
        $value = $this->getAttribute("collect_reg_mods");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("collect_reg_mods", $value, "int");
    }


    /** @return int */
    public function getCollectNetConns(): int
    {
        $value = $this->getAttribute("collect_net_conns");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("collect_net_conns", $value, "int");
    }


    /** @return int */
    public function getCollectProcesses(): int
    {
        $value = $this->getAttribute("collect_processes");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("collect_processes", $value, "int");
    }


    /** @return int */
    public function getCollectCrossProcesses(): int
    {
        $value = $this->getAttribute("collect_cross_processes");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("collect_cross_processes", $value, "int");
    }


    /** @return int */
    public function getCollectEmetEvents(): int
    {
        $value = $this->getAttribute("collect_emet_events");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("collect_emet_events", $value, "int");
    }


    /** @return int */
    public function getCollectDataFileWrites(): int
    {
        $value = $this->getAttribute("collect_data_file_writes");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("collect_data_file_writes", $value, "int");
    }


    /** @return int */
    public function getCollectProcessUserCon(): int
    {
        $value = $this->getAttribute("collect_process_user_con");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("collect_process_user_con", $value, "int");
    }


    /** @return int */
    public function getCollectSensorOperations(): int
    {
        $value = $this->getAttribute("collect_sensor_operations");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("collect_sensor_operations", $value, "int");
    }


    /** @return int */
    public function getLogFileDiskQuotaMb(): int
    {
        $value = $this->getAttribute("log_file_disk_quota_mb");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("log_file_disk_quota_mb", $value, "int");
    }


    /** @return int */
    public function getLogFileDiskQuotaPercentage(): int
    {
        $value = $this->getAttribute("log_file_disk_quota_percentage");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("log_file_disk_quota_percentage", $value, "int");
    }


    /** @return int */
    public function getProtectionDisabled(): int
    {
        $value = $this->getAttribute("protection_disabled");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("protection_disabled", $value, "int");
    }


    /** @return string */
    public function getSensorIpAddr(): string
    {
        $value = $this->getAttribute("sensor_ip_addr");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("sensor_ip_addr", $value, "string");
    }


    /** @return string */
    public function getSensorBackendServer(): string
    {
        $value = $this->getAttribute("sensor_backend_server");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("sensor_backend_server", $value, "string");
    }


    /** @return int */
    public function getEventQueue(): int
    {
        $value = $this->getAttribute("event_queue");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("event_queue", $value, "int");
    }


    /** @return int */
    public function getBinaryQueue(): int
    {
        $value = $this->getAttribute("binary_queue");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("binary_queue", $value, "int");
    }
}
