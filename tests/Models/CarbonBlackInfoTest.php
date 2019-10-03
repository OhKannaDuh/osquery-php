<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\CarbonBlackInfo;
use OhKannaDuh\OsQueryTests\TestCase;

final class CarbonBlackInfoTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the sensor_id attribute from our model [CarbonBlackInfo].
     */
    public function testGetSensorId(): void
    {
        $model = CarbonBlackInfo::load([
            "sensor_id" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getSensorId());
    }


    /**
     * Ensure we can get the config_name attribute from our model [CarbonBlackInfo].
     */
    public function testGetConfigName(): void
    {
        $model = CarbonBlackInfo::load([
            "config_name" => "config_name",
        ], $this->container);

        $this->assertSame("config_name", $model->getConfigName());
    }


    /**
     * Ensure we can get the collect_store_files attribute from our model [CarbonBlackInfo].
     */
    public function testGetCollectStoreFiles(): void
    {
        $model = CarbonBlackInfo::load([
            "collect_store_files" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getCollectStoreFiles());
    }


    /**
     * Ensure we can get the collect_module_loads attribute from our model [CarbonBlackInfo].
     */
    public function testGetCollectModuleLoads(): void
    {
        $model = CarbonBlackInfo::load([
            "collect_module_loads" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getCollectModuleLoads());
    }


    /**
     * Ensure we can get the collect_module_info attribute from our model [CarbonBlackInfo].
     */
    public function testGetCollectModuleInfo(): void
    {
        $model = CarbonBlackInfo::load([
            "collect_module_info" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getCollectModuleInfo());
    }


    /**
     * Ensure we can get the collect_file_mods attribute from our model [CarbonBlackInfo].
     */
    public function testGetCollectFileMods(): void
    {
        $model = CarbonBlackInfo::load([
            "collect_file_mods" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getCollectFileMods());
    }


    /**
     * Ensure we can get the collect_reg_mods attribute from our model [CarbonBlackInfo].
     */
    public function testGetCollectRegMods(): void
    {
        $model = CarbonBlackInfo::load([
            "collect_reg_mods" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getCollectRegMods());
    }


    /**
     * Ensure we can get the collect_net_conns attribute from our model [CarbonBlackInfo].
     */
    public function testGetCollectNetConns(): void
    {
        $model = CarbonBlackInfo::load([
            "collect_net_conns" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getCollectNetConns());
    }


    /**
     * Ensure we can get the collect_processes attribute from our model [CarbonBlackInfo].
     */
    public function testGetCollectProcesses(): void
    {
        $model = CarbonBlackInfo::load([
            "collect_processes" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getCollectProcesses());
    }


    /**
     * Ensure we can get the collect_cross_processes attribute from our model [CarbonBlackInfo].
     */
    public function testGetCollectCrossProcesses(): void
    {
        $model = CarbonBlackInfo::load([
            "collect_cross_processes" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getCollectCrossProcesses());
    }


    /**
     * Ensure we can get the collect_emet_events attribute from our model [CarbonBlackInfo].
     */
    public function testGetCollectEmetEvents(): void
    {
        $model = CarbonBlackInfo::load([
            "collect_emet_events" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getCollectEmetEvents());
    }


    /**
     * Ensure we can get the collect_data_file_writes attribute from our model [CarbonBlackInfo].
     */
    public function testGetCollectDataFileWrites(): void
    {
        $model = CarbonBlackInfo::load([
            "collect_data_file_writes" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getCollectDataFileWrites());
    }


    /**
     * Ensure we can get the collect_process_user_con attribute from our model [CarbonBlackInfo].
     */
    public function testGetCollectProcessUserCon(): void
    {
        $model = CarbonBlackInfo::load([
            "collect_process_user_con" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getCollectProcessUserCon());
    }


    /**
     * Ensure we can get the collect_sensor_operations attribute from our model [CarbonBlackInfo].
     */
    public function testGetCollectSensorOperations(): void
    {
        $model = CarbonBlackInfo::load([
            "collect_sensor_operations" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getCollectSensorOperations());
    }


    /**
     * Ensure we can get the log_file_disk_quota_mb attribute from our model [CarbonBlackInfo].
     */
    public function testGetLogFileDiskQuotaMb(): void
    {
        $model = CarbonBlackInfo::load([
            "log_file_disk_quota_mb" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getLogFileDiskQuotaMb());
    }


    /**
     * Ensure we can get the log_file_disk_quota_percentage attribute from our model [CarbonBlackInfo].
     */
    public function testGetLogFileDiskQuotaPercentage(): void
    {
        $model = CarbonBlackInfo::load([
            "log_file_disk_quota_percentage" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getLogFileDiskQuotaPercentage());
    }


    /**
     * Ensure we can get the protection_disabled attribute from our model [CarbonBlackInfo].
     */
    public function testGetProtectionDisabled(): void
    {
        $model = CarbonBlackInfo::load([
            "protection_disabled" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getProtectionDisabled());
    }


    /**
     * Ensure we can get the sensor_ip_addr attribute from our model [CarbonBlackInfo].
     */
    public function testGetSensorIpAddr(): void
    {
        $model = CarbonBlackInfo::load([
            "sensor_ip_addr" => "sensor_ip_addr",
        ], $this->container);

        $this->assertSame("sensor_ip_addr", $model->getSensorIpAddr());
    }


    /**
     * Ensure we can get the sensor_backend_server attribute from our model [CarbonBlackInfo].
     */
    public function testGetSensorBackendServer(): void
    {
        $model = CarbonBlackInfo::load([
            "sensor_backend_server" => "sensor_backend_server",
        ], $this->container);

        $this->assertSame("sensor_backend_server", $model->getSensorBackendServer());
    }


    /**
     * Ensure we can get the event_queue attribute from our model [CarbonBlackInfo].
     */
    public function testGetEventQueue(): void
    {
        $model = CarbonBlackInfo::load([
            "event_queue" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getEventQueue());
    }


    /**
     * Ensure we can get the binary_queue attribute from our model [CarbonBlackInfo].
     */
    public function testGetBinaryQueue(): void
    {
        $model = CarbonBlackInfo::load([
            "binary_queue" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getBinaryQueue());
    }
}
