<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\PlatformInfo;
use OhKannaDuh\OsQueryTests\TestCase;

final class PlatformInfoTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the vendor attribute from our model [PlatformInfo].
     */
    public function testGetVendor(): void
    {
        $model = PlatformInfo::load([
            "vendor" => "vendor",
        ], $this->container);

        $this->assertSame("vendor", $model->getVendor());
    }


    /**
     * Ensure we can get the version attribute from our model [PlatformInfo].
     */
    public function testGetVersion(): void
    {
        $model = PlatformInfo::load([
            "version" => "version",
        ], $this->container);

        $this->assertSame("version", $model->getVersion());
    }


    /**
     * Ensure we can get the date attribute from our model [PlatformInfo].
     */
    public function testGetDate(): void
    {
        $model = PlatformInfo::load([
            "date" => "date",
        ], $this->container);

        $this->assertSame("date", $model->getDate());
    }


    /**
     * Ensure we can get the revision attribute from our model [PlatformInfo].
     */
    public function testGetRevision(): void
    {
        $model = PlatformInfo::load([
            "revision" => "revision",
        ], $this->container);

        $this->assertSame("revision", $model->getRevision());
    }


    /**
     * Ensure we can get the address attribute from our model [PlatformInfo].
     */
    public function testGetAddress(): void
    {
        $model = PlatformInfo::load([
            "address" => "address",
        ], $this->container);

        $this->assertSame("address", $model->getAddress());
    }


    /**
     * Ensure we can get the size attribute from our model [PlatformInfo].
     */
    public function testGetSize(): void
    {
        $model = PlatformInfo::load([
            "size" => "size",
        ], $this->container);

        $this->assertSame("size", $model->getSize());
    }


    /**
     * Ensure we can get the volume_size attribute from our model [PlatformInfo].
     */
    public function testGetVolumeSize(): void
    {
        $model = PlatformInfo::load([
            "volume_size" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getVolumeSize());
    }


    /**
     * Ensure we can get the extra attribute from our model [PlatformInfo].
     */
    public function testGetExtra(): void
    {
        $model = PlatformInfo::load([
            "extra" => "extra",
        ], $this->container);

        $this->assertSame("extra", $model->getExtra());
    }
}
