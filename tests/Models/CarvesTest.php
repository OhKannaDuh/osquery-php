<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\Carves;
use OhKannaDuh\OsQueryTests\TestCase;

final class CarvesTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the time attribute from our model [Carves].
     */
    public function testGetTime(): void
    {
        $model = Carves::load([
            "time" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getTime());
    }


    /**
     * Ensure we can get the sha256 attribute from our model [Carves].
     */
    public function testGetSha256(): void
    {
        $model = Carves::load([
            "sha256" => "sha256",
        ], $this->container);

        $this->assertSame("sha256", $model->getSha256());
    }


    /**
     * Ensure we can get the size attribute from our model [Carves].
     */
    public function testGetSize(): void
    {
        $model = Carves::load([
            "size" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getSize());
    }


    /**
     * Ensure we can get the path attribute from our model [Carves].
     */
    public function testGetPath(): void
    {
        $model = Carves::load([
            "path" => "path",
        ], $this->container);

        $this->assertSame("path", $model->getPath());
    }


    /**
     * Ensure we can get the status attribute from our model [Carves].
     */
    public function testGetStatus(): void
    {
        $model = Carves::load([
            "status" => "status",
        ], $this->container);

        $this->assertSame("status", $model->getStatus());
    }


    /**
     * Ensure we can get the carve_guid attribute from our model [Carves].
     */
    public function testGetCarveGuid(): void
    {
        $model = Carves::load([
            "carve_guid" => "carve_guid",
        ], $this->container);

        $this->assertSame("carve_guid", $model->getCarveGuid());
    }


    /**
     * Ensure we can get the carve attribute from our model [Carves].
     */
    public function testGetCarve(): void
    {
        $model = Carves::load([
            "carve" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getCarve());
    }
}
