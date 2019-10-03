<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\Processes;
use OhKannaDuh\OsQueryTests\TestCase;

final class ProcessesTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the pid attribute from our model [Processes].
     */
    public function testGetPid(): void
    {
        $model = Processes::load([
            "pid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getPid());
    }


    /**
     * Ensure we can get the name attribute from our model [Processes].
     */
    public function testGetName(): void
    {
        $model = Processes::load([
            "name" => "name",
        ], $this->container);

        $this->assertSame("name", $model->getName());
    }


    /**
     * Ensure we can get the path attribute from our model [Processes].
     */
    public function testGetPath(): void
    {
        $model = Processes::load([
            "path" => "path",
        ], $this->container);

        $this->assertSame("path", $model->getPath());
    }


    /**
     * Ensure we can get the cmdline attribute from our model [Processes].
     */
    public function testGetCmdline(): void
    {
        $model = Processes::load([
            "cmdline" => "cmdline",
        ], $this->container);

        $this->assertSame("cmdline", $model->getCmdline());
    }


    /**
     * Ensure we can get the state attribute from our model [Processes].
     */
    public function testGetState(): void
    {
        $model = Processes::load([
            "state" => "state",
        ], $this->container);

        $this->assertSame("state", $model->getState());
    }


    /**
     * Ensure we can get the cwd attribute from our model [Processes].
     */
    public function testGetCwd(): void
    {
        $model = Processes::load([
            "cwd" => "cwd",
        ], $this->container);

        $this->assertSame("cwd", $model->getCwd());
    }


    /**
     * Ensure we can get the root attribute from our model [Processes].
     */
    public function testGetRoot(): void
    {
        $model = Processes::load([
            "root" => "root",
        ], $this->container);

        $this->assertSame("root", $model->getRoot());
    }


    /**
     * Ensure we can get the uid attribute from our model [Processes].
     */
    public function testGetUid(): void
    {
        $model = Processes::load([
            "uid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getUid());
    }


    /**
     * Ensure we can get the gid attribute from our model [Processes].
     */
    public function testGetGid(): void
    {
        $model = Processes::load([
            "gid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getGid());
    }


    /**
     * Ensure we can get the euid attribute from our model [Processes].
     */
    public function testGetEuid(): void
    {
        $model = Processes::load([
            "euid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getEuid());
    }


    /**
     * Ensure we can get the egid attribute from our model [Processes].
     */
    public function testGetEgid(): void
    {
        $model = Processes::load([
            "egid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getEgid());
    }


    /**
     * Ensure we can get the suid attribute from our model [Processes].
     */
    public function testGetSuid(): void
    {
        $model = Processes::load([
            "suid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getSuid());
    }


    /**
     * Ensure we can get the sgid attribute from our model [Processes].
     */
    public function testGetSgid(): void
    {
        $model = Processes::load([
            "sgid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getSgid());
    }


    /**
     * Ensure we can get the on_disk attribute from our model [Processes].
     */
    public function testGetOnDisk(): void
    {
        $model = Processes::load([
            "on_disk" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getOnDisk());
    }


    /**
     * Ensure we can get the wired_size attribute from our model [Processes].
     */
    public function testGetWiredSize(): void
    {
        $model = Processes::load([
            "wired_size" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getWiredSize());
    }


    /**
     * Ensure we can get the resident_size attribute from our model [Processes].
     */
    public function testGetResidentSize(): void
    {
        $model = Processes::load([
            "resident_size" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getResidentSize());
    }


    /**
     * Ensure we can get the total_size attribute from our model [Processes].
     */
    public function testGetTotalSize(): void
    {
        $model = Processes::load([
            "total_size" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getTotalSize());
    }


    /**
     * Ensure we can get the user_time attribute from our model [Processes].
     */
    public function testGetUserTime(): void
    {
        $model = Processes::load([
            "user_time" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getUserTime());
    }


    /**
     * Ensure we can get the system_time attribute from our model [Processes].
     */
    public function testGetSystemTime(): void
    {
        $model = Processes::load([
            "system_time" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getSystemTime());
    }


    /**
     * Ensure we can get the disk_bytes_read attribute from our model [Processes].
     */
    public function testGetDiskBytesRead(): void
    {
        $model = Processes::load([
            "disk_bytes_read" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getDiskBytesRead());
    }


    /**
     * Ensure we can get the disk_bytes_written attribute from our model [Processes].
     */
    public function testGetDiskBytesWritten(): void
    {
        $model = Processes::load([
            "disk_bytes_written" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getDiskBytesWritten());
    }


    /**
     * Ensure we can get the start_time attribute from our model [Processes].
     */
    public function testGetStartTime(): void
    {
        $model = Processes::load([
            "start_time" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getStartTime());
    }


    /**
     * Ensure we can get the parent attribute from our model [Processes].
     */
    public function testGetParent(): void
    {
        $model = Processes::load([
            "parent" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getParent());
    }


    /**
     * Ensure we can get the pgroup attribute from our model [Processes].
     */
    public function testGetPgroup(): void
    {
        $model = Processes::load([
            "pgroup" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getPgroup());
    }


    /**
     * Ensure we can get the threads attribute from our model [Processes].
     */
    public function testGetThreads(): void
    {
        $model = Processes::load([
            "threads" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getThreads());
    }


    /**
     * Ensure we can get the nice attribute from our model [Processes].
     */
    public function testGetNice(): void
    {
        $model = Processes::load([
            "nice" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getNice());
    }


    /**
     * Ensure we can get the is_elevated_token attribute from our model [Processes].
     */
    public function testGetIsElevatedToken(): void
    {
        $model = Processes::load([
            "is_elevated_token" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getIsElevatedToken());
    }


    /**
     * Ensure we can get the elapsed_time attribute from our model [Processes].
     */
    public function testGetElapsedTime(): void
    {
        $model = Processes::load([
            "elapsed_time" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getElapsedTime());
    }


    /**
     * Ensure we can get the handle_count attribute from our model [Processes].
     */
    public function testGetHandleCount(): void
    {
        $model = Processes::load([
            "handle_count" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getHandleCount());
    }


    /**
     * Ensure we can get the percent_processor_time attribute from our model [Processes].
     */
    public function testGetPercentProcessorTime(): void
    {
        $model = Processes::load([
            "percent_processor_time" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getPercentProcessorTime());
    }


    /**
     * Ensure we can get the upid attribute from our model [Processes].
     */
    public function testGetUpid(): void
    {
        $model = Processes::load([
            "upid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getUpid());
    }


    /**
     * Ensure we can get the uppid attribute from our model [Processes].
     */
    public function testGetUppid(): void
    {
        $model = Processes::load([
            "uppid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getUppid());
    }


    /**
     * Ensure we can get the cpu_type attribute from our model [Processes].
     */
    public function testGetCpuType(): void
    {
        $model = Processes::load([
            "cpu_type" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getCpuType());
    }


    /**
     * Ensure we can get the cpu_subtype attribute from our model [Processes].
     */
    public function testGetCpuSubtype(): void
    {
        $model = Processes::load([
            "cpu_subtype" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getCpuSubtype());
    }
}
