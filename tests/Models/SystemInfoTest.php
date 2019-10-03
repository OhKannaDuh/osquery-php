<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\SystemInfo;
use OhKannaDuh\OsQueryTests\TestCase;

final class SystemInfoTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the hostname attribute from our model [SystemInfo].
     */
    public function testGetHostname(): void
    {
        $model = SystemInfo::load([
            "hostname" => "hostname",
        ], $this->container);

        $this->assertSame("hostname", $model->getHostname());
    }


    /**
     * Ensure we can get the uuid attribute from our model [SystemInfo].
     */
    public function testGetUuid(): void
    {
        $model = SystemInfo::load([
            "uuid" => "uuid",
        ], $this->container);

        $this->assertSame("uuid", $model->getUuid());
    }


    /**
     * Ensure we can get the cpu_type attribute from our model [SystemInfo].
     */
    public function testGetCpuType(): void
    {
        $model = SystemInfo::load([
            "cpu_type" => "cpu_type",
        ], $this->container);

        $this->assertSame("cpu_type", $model->getCpuType());
    }


    /**
     * Ensure we can get the cpu_subtype attribute from our model [SystemInfo].
     */
    public function testGetCpuSubtype(): void
    {
        $model = SystemInfo::load([
            "cpu_subtype" => "cpu_subtype",
        ], $this->container);

        $this->assertSame("cpu_subtype", $model->getCpuSubtype());
    }


    /**
     * Ensure we can get the cpu_brand attribute from our model [SystemInfo].
     */
    public function testGetCpuBrand(): void
    {
        $model = SystemInfo::load([
            "cpu_brand" => "cpu_brand",
        ], $this->container);

        $this->assertSame("cpu_brand", $model->getCpuBrand());
    }


    /**
     * Ensure we can get the cpu_physical_cores attribute from our model [SystemInfo].
     */
    public function testGetCpuPhysicalCores(): void
    {
        $model = SystemInfo::load([
            "cpu_physical_cores" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getCpuPhysicalCores());
    }


    /**
     * Ensure we can get the cpu_logical_cores attribute from our model [SystemInfo].
     */
    public function testGetCpuLogicalCores(): void
    {
        $model = SystemInfo::load([
            "cpu_logical_cores" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getCpuLogicalCores());
    }


    /**
     * Ensure we can get the cpu_microcode attribute from our model [SystemInfo].
     */
    public function testGetCpuMicrocode(): void
    {
        $model = SystemInfo::load([
            "cpu_microcode" => "cpu_microcode",
        ], $this->container);

        $this->assertSame("cpu_microcode", $model->getCpuMicrocode());
    }


    /**
     * Ensure we can get the physical_memory attribute from our model [SystemInfo].
     */
    public function testGetPhysicalMemory(): void
    {
        $model = SystemInfo::load([
            "physical_memory" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getPhysicalMemory());
    }


    /**
     * Ensure we can get the hardware_vendor attribute from our model [SystemInfo].
     */
    public function testGetHardwareVendor(): void
    {
        $model = SystemInfo::load([
            "hardware_vendor" => "hardware_vendor",
        ], $this->container);

        $this->assertSame("hardware_vendor", $model->getHardwareVendor());
    }


    /**
     * Ensure we can get the hardware_model attribute from our model [SystemInfo].
     */
    public function testGetHardwareModel(): void
    {
        $model = SystemInfo::load([
            "hardware_model" => "hardware_model",
        ], $this->container);

        $this->assertSame("hardware_model", $model->getHardwareModel());
    }


    /**
     * Ensure we can get the hardware_version attribute from our model [SystemInfo].
     */
    public function testGetHardwareVersion(): void
    {
        $model = SystemInfo::load([
            "hardware_version" => "hardware_version",
        ], $this->container);

        $this->assertSame("hardware_version", $model->getHardwareVersion());
    }


    /**
     * Ensure we can get the hardware_serial attribute from our model [SystemInfo].
     */
    public function testGetHardwareSerial(): void
    {
        $model = SystemInfo::load([
            "hardware_serial" => "hardware_serial",
        ], $this->container);

        $this->assertSame("hardware_serial", $model->getHardwareSerial());
    }


    /**
     * Ensure we can get the computer_name attribute from our model [SystemInfo].
     */
    public function testGetComputerName(): void
    {
        $model = SystemInfo::load([
            "computer_name" => "computer_name",
        ], $this->container);

        $this->assertSame("computer_name", $model->getComputerName());
    }


    /**
     * Ensure we can get the local_hostname attribute from our model [SystemInfo].
     */
    public function testGetLocalHostname(): void
    {
        $model = SystemInfo::load([
            "local_hostname" => "local_hostname",
        ], $this->container);

        $this->assertSame("local_hostname", $model->getLocalHostname());
    }
}
