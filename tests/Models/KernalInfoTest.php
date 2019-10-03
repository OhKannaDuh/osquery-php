<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\KernalInfo;
use OhKannaDuh\OsQueryTests\TestCase;

final class KernalInfoTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the version attribute from our model [KernalInfo].
     */
    public function testGetVersion(): void
    {
        $model = KernalInfo::load([
            "version" => "version",
        ], $this->container);

        $this->assertSame("version", $model->getVersion());
    }


    /**
     * Ensure we can get the arguments attribute from our model [KernalInfo].
     */
    public function testGetArguments(): void
    {
        $model = KernalInfo::load([
            "arguments" => "arguments",
        ], $this->container);

        $this->assertSame("arguments", $model->getArguments());
    }


    /**
     * Ensure we can get the path attribute from our model [KernalInfo].
     */
    public function testGetPath(): void
    {
        $model = KernalInfo::load([
            "path" => "path",
        ], $this->container);

        $this->assertSame("path", $model->getPath());
    }


    /**
     * Ensure we can get the device attribute from our model [KernalInfo].
     */
    public function testGetDevice(): void
    {
        $model = KernalInfo::load([
            "device" => "device",
        ], $this->container);

        $this->assertSame("device", $model->getDevice());
    }
}
