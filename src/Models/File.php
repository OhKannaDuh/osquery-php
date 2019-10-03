<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class File extends Model
{
    /** @inheritDoc */
    protected $table = "file";

    /** @inheritDoc */
    protected $attributes = [
        "path" => "string",
        "directory" => "string",
        "filename" => "string",
        "inode" => "int",
        "uid" => "int",
        "gid" => "int",
        "mode" => "string",
        "device" => "int",
        "size" => "int",
        "block_size" => "int",
        "atime" => "int",
        "mtime" => "int",
        "ctime" => "int",
        "btime" => "int",
        "hard_links" => "int",
        "symlink" => "int",
        "type" => "string",
        "attributes" => "string",
        "volume_serial" => "string",
        "file_id" => "string",
        "product_version" => "string",
    ];


    /** @return string */
    public function getPath(): string
    {
        $value = $this->getAttribute("path");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("path", $value, "string");
    }


    /** @return string */
    public function getDirectory(): string
    {
        $value = $this->getAttribute("directory");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("directory", $value, "string");
    }


    /** @return string */
    public function getFilename(): string
    {
        $value = $this->getAttribute("filename");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("filename", $value, "string");
    }


    /** @return int */
    public function getInode(): int
    {
        $value = $this->getAttribute("inode");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("inode", $value, "int");
    }


    /** @return int */
    public function getUid(): int
    {
        $value = $this->getAttribute("uid");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("uid", $value, "int");
    }


    /** @return int */
    public function getGid(): int
    {
        $value = $this->getAttribute("gid");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("gid", $value, "int");
    }


    /** @return string */
    public function getMode(): string
    {
        $value = $this->getAttribute("mode");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("mode", $value, "string");
    }


    /** @return int */
    public function getDevice(): int
    {
        $value = $this->getAttribute("device");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("device", $value, "int");
    }


    /** @return int */
    public function getSize(): int
    {
        $value = $this->getAttribute("size");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("size", $value, "int");
    }


    /** @return int */
    public function getBlockSize(): int
    {
        $value = $this->getAttribute("block_size");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("block_size", $value, "int");
    }


    /** @return int */
    public function getAtime(): int
    {
        $value = $this->getAttribute("atime");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("atime", $value, "int");
    }


    /** @return int */
    public function getMtime(): int
    {
        $value = $this->getAttribute("mtime");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("mtime", $value, "int");
    }


    /** @return int */
    public function getCtime(): int
    {
        $value = $this->getAttribute("ctime");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("ctime", $value, "int");
    }


    /** @return int */
    public function getBtime(): int
    {
        $value = $this->getAttribute("btime");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("btime", $value, "int");
    }


    /** @return int */
    public function getHardLinks(): int
    {
        $value = $this->getAttribute("hard_links");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("hard_links", $value, "int");
    }


    /** @return int */
    public function getSymlink(): int
    {
        $value = $this->getAttribute("symlink");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("symlink", $value, "int");
    }


    /** @return string */
    public function getType(): string
    {
        $value = $this->getAttribute("type");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("type", $value, "string");
    }


    /** @return string */
    public function getAttributes(): string
    {
        $value = $this->getAttribute("attributes");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("attributes", $value, "string");
    }


    /** @return string */
    public function getVolumeSerial(): string
    {
        $value = $this->getAttribute("volume_serial");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("volume_serial", $value, "string");
    }


    /** @return string */
    public function getFileId(): string
    {
        $value = $this->getAttribute("file_id");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("file_id", $value, "string");
    }


    /** @return string */
    public function getProductVersion(): string
    {
        $value = $this->getAttribute("product_version");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("product_version", $value, "string");
    }
}
