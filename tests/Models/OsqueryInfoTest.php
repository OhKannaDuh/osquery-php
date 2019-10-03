<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\OsqueryInfo;
use OhKannaDuh\OsQueryTests\TestCase;

final class OsqueryInfoTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the pid attribute from our model [OsqueryInfo].
     */
    public function testGetPid(): void
    {
        $model = OsqueryInfo::load([
            "pid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getPid());
    }


    /**
     * Ensure we can get the uuid attribute from our model [OsqueryInfo].
     */
    public function testGetUuid(): void
    {
        $model = OsqueryInfo::load([
            "uuid" => "uuid",
        ], $this->container);

        $this->assertSame("uuid", $model->getUuid());
    }


    /**
     * Ensure we can get the instance_id attribute from our model [OsqueryInfo].
     */
    public function testGetInstanceId(): void
    {
        $model = OsqueryInfo::load([
            "instance_id" => "instance_id",
        ], $this->container);

        $this->assertSame("instance_id", $model->getInstanceId());
    }


    /**
     * Ensure we can get the version attribute from our model [OsqueryInfo].
     */
    public function testGetVersion(): void
    {
        $model = OsqueryInfo::load([
            "version" => "version",
        ], $this->container);

        $this->assertSame("version", $model->getVersion());
    }


    /**
     * Ensure we can get the config_hash attribute from our model [OsqueryInfo].
     */
    public function testGetConfigHash(): void
    {
        $model = OsqueryInfo::load([
            "config_hash" => "config_hash",
        ], $this->container);

        $this->assertSame("config_hash", $model->getConfigHash());
    }


    /**
     * Ensure we can get the config_valid attribute from our model [OsqueryInfo].
     */
    public function testGetConfigValid(): void
    {
        $model = OsqueryInfo::load([
            "config_valid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getConfigValid());
    }


    /**
     * Ensure we can get the extensions attribute from our model [OsqueryInfo].
     */
    public function testGetExtensions(): void
    {
        $model = OsqueryInfo::load([
            "extensions" => "extensions",
        ], $this->container);

        $this->assertSame("extensions", $model->getExtensions());
    }


    /**
     * Ensure we can get the build_platform attribute from our model [OsqueryInfo].
     */
    public function testGetBuildPlatform(): void
    {
        $model = OsqueryInfo::load([
            "build_platform" => "build_platform",
        ], $this->container);

        $this->assertSame("build_platform", $model->getBuildPlatform());
    }


    /**
     * Ensure we can get the build_distro attribute from our model [OsqueryInfo].
     */
    public function testGetBuildDistro(): void
    {
        $model = OsqueryInfo::load([
            "build_distro" => "build_distro",
        ], $this->container);

        $this->assertSame("build_distro", $model->getBuildDistro());
    }


    /**
     * Ensure we can get the start_time attribute from our model [OsqueryInfo].
     */
    public function testGetStartTime(): void
    {
        $model = OsqueryInfo::load([
            "start_time" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getStartTime());
    }


    /**
     * Ensure we can get the watcher attribute from our model [OsqueryInfo].
     */
    public function testGetWatcher(): void
    {
        $model = OsqueryInfo::load([
            "watcher" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getWatcher());
    }
}
