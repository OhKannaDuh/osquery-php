<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\File;
use OhKannaDuh\OsQueryTests\TestCase;

final class FileTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the path attribute from our model [File].
     */
    public function testGetPath(): void
    {
        $model = File::load([
            "path" => "path",
        ], $this->container);

        $this->assertSame("path", $model->getPath());
    }


    /**
     * Ensure we can get the directory attribute from our model [File].
     */
    public function testGetDirectory(): void
    {
        $model = File::load([
            "directory" => "directory",
        ], $this->container);

        $this->assertSame("directory", $model->getDirectory());
    }


    /**
     * Ensure we can get the filename attribute from our model [File].
     */
    public function testGetFilename(): void
    {
        $model = File::load([
            "filename" => "filename",
        ], $this->container);

        $this->assertSame("filename", $model->getFilename());
    }


    /**
     * Ensure we can get the inode attribute from our model [File].
     */
    public function testGetInode(): void
    {
        $model = File::load([
            "inode" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getInode());
    }


    /**
     * Ensure we can get the uid attribute from our model [File].
     */
    public function testGetUid(): void
    {
        $model = File::load([
            "uid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getUid());
    }


    /**
     * Ensure we can get the gid attribute from our model [File].
     */
    public function testGetGid(): void
    {
        $model = File::load([
            "gid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getGid());
    }


    /**
     * Ensure we can get the mode attribute from our model [File].
     */
    public function testGetMode(): void
    {
        $model = File::load([
            "mode" => "mode",
        ], $this->container);

        $this->assertSame("mode", $model->getMode());
    }


    /**
     * Ensure we can get the device attribute from our model [File].
     */
    public function testGetDevice(): void
    {
        $model = File::load([
            "device" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getDevice());
    }


    /**
     * Ensure we can get the size attribute from our model [File].
     */
    public function testGetSize(): void
    {
        $model = File::load([
            "size" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getSize());
    }


    /**
     * Ensure we can get the block_size attribute from our model [File].
     */
    public function testGetBlockSize(): void
    {
        $model = File::load([
            "block_size" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getBlockSize());
    }


    /**
     * Ensure we can get the atime attribute from our model [File].
     */
    public function testGetAtime(): void
    {
        $model = File::load([
            "atime" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getAtime());
    }


    /**
     * Ensure we can get the mtime attribute from our model [File].
     */
    public function testGetMtime(): void
    {
        $model = File::load([
            "mtime" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getMtime());
    }


    /**
     * Ensure we can get the ctime attribute from our model [File].
     */
    public function testGetCtime(): void
    {
        $model = File::load([
            "ctime" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getCtime());
    }


    /**
     * Ensure we can get the btime attribute from our model [File].
     */
    public function testGetBtime(): void
    {
        $model = File::load([
            "btime" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getBtime());
    }


    /**
     * Ensure we can get the hard_links attribute from our model [File].
     */
    public function testGetHardLinks(): void
    {
        $model = File::load([
            "hard_links" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getHardLinks());
    }


    /**
     * Ensure we can get the symlink attribute from our model [File].
     */
    public function testGetSymlink(): void
    {
        $model = File::load([
            "symlink" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getSymlink());
    }


    /**
     * Ensure we can get the type attribute from our model [File].
     */
    public function testGetType(): void
    {
        $model = File::load([
            "type" => "type",
        ], $this->container);

        $this->assertSame("type", $model->getType());
    }


    /**
     * Ensure we can get the attributes attribute from our model [File].
     */
    public function testGetAttributes(): void
    {
        $model = File::load([
            "attributes" => "attributes",
        ], $this->container);

        $this->assertSame("attributes", $model->getAttributes());
    }


    /**
     * Ensure we can get the volume_serial attribute from our model [File].
     */
    public function testGetVolumeSerial(): void
    {
        $model = File::load([
            "volume_serial" => "volume_serial",
        ], $this->container);

        $this->assertSame("volume_serial", $model->getVolumeSerial());
    }


    /**
     * Ensure we can get the file_id attribute from our model [File].
     */
    public function testGetFileId(): void
    {
        $model = File::load([
            "file_id" => "file_id",
        ], $this->container);

        $this->assertSame("file_id", $model->getFileId());
    }


    /**
     * Ensure we can get the product_version attribute from our model [File].
     */
    public function testGetProductVersion(): void
    {
        $model = File::load([
            "product_version" => "product_version",
        ], $this->container);

        $this->assertSame("product_version", $model->getProductVersion());
    }
}
