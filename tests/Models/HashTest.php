<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\Hash;
use OhKannaDuh\OsQueryTests\TestCase;

final class HashTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the path attribute from our model [Hash].
     */
    public function testGetPath(): void
    {
        $model = Hash::load([
            "path" => "path",
        ], $this->container);

        $this->assertSame("path", $model->getPath());
    }


    /**
     * Ensure we can get the directory attribute from our model [Hash].
     */
    public function testGetDirectory(): void
    {
        $model = Hash::load([
            "directory" => "directory",
        ], $this->container);

        $this->assertSame("directory", $model->getDirectory());
    }


    /**
     * Ensure we can get the md5 attribute from our model [Hash].
     */
    public function testGetMd5(): void
    {
        $model = Hash::load([
            "md5" => "md5",
        ], $this->container);

        $this->assertSame("md5", $model->getMd5());
    }


    /**
     * Ensure we can get the sha1 attribute from our model [Hash].
     */
    public function testGetSha1(): void
    {
        $model = Hash::load([
            "sha1" => "sha1",
        ], $this->container);

        $this->assertSame("sha1", $model->getSha1());
    }


    /**
     * Ensure we can get the sha256 attribute from our model [Hash].
     */
    public function testGetSha256(): void
    {
        $model = Hash::load([
            "sha256" => "sha256",
        ], $this->container);

        $this->assertSame("sha256", $model->getSha256());
    }


    /**
     * Ensure we can get the ssdeep attribute from our model [Hash].
     */
    public function testGetSsdeep(): void
    {
        $model = Hash::load([
            "ssdeep" => "ssdeep",
        ], $this->container);

        $this->assertSame("ssdeep", $model->getSsdeep());
    }
}
