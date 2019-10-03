<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\ProcessMemoryMap;
use OhKannaDuh\OsQueryTests\TestCase;

final class ProcessMemoryMapTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the pid attribute from our model [ProcessMemoryMap].
     */
    public function testGetPid(): void
    {
        $model = ProcessMemoryMap::load([
            "pid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getPid());
    }


    /**
     * Ensure we can get the start attribute from our model [ProcessMemoryMap].
     */
    public function testGetStart(): void
    {
        $model = ProcessMemoryMap::load([
            "start" => "start",
        ], $this->container);

        $this->assertSame("start", $model->getStart());
    }


    /**
     * Ensure we can get the end attribute from our model [ProcessMemoryMap].
     */
    public function testGetEnd(): void
    {
        $model = ProcessMemoryMap::load([
            "end" => "end",
        ], $this->container);

        $this->assertSame("end", $model->getEnd());
    }


    /**
     * Ensure we can get the permissions attribute from our model [ProcessMemoryMap].
     */
    public function testGetPermissions(): void
    {
        $model = ProcessMemoryMap::load([
            "permissions" => "permissions",
        ], $this->container);

        $this->assertSame("permissions", $model->getPermissions());
    }


    /**
     * Ensure we can get the offset attribute from our model [ProcessMemoryMap].
     */
    public function testGetOffset(): void
    {
        $model = ProcessMemoryMap::load([
            "offset" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getOffset());
    }


    /**
     * Ensure we can get the device attribute from our model [ProcessMemoryMap].
     */
    public function testGetDevice(): void
    {
        $model = ProcessMemoryMap::load([
            "device" => "device",
        ], $this->container);

        $this->assertSame("device", $model->getDevice());
    }


    /**
     * Ensure we can get the inode attribute from our model [ProcessMemoryMap].
     */
    public function testGetInode(): void
    {
        $model = ProcessMemoryMap::load([
            "inode" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getInode());
    }


    /**
     * Ensure we can get the path attribute from our model [ProcessMemoryMap].
     */
    public function testGetPath(): void
    {
        $model = ProcessMemoryMap::load([
            "path" => "path",
        ], $this->container);

        $this->assertSame("path", $model->getPath());
    }


    /**
     * Ensure we can get the pseudo attribute from our model [ProcessMemoryMap].
     */
    public function testGetPseudo(): void
    {
        $model = ProcessMemoryMap::load([
            "pseudo" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getPseudo());
    }
}
