<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\OsVersion;
use OhKannaDuh\OsQueryTests\TestCase;

final class OsVersionTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the name attribute from our model [OsVersion].
     */
    public function testGetName(): void
    {
        $model = OsVersion::load([
            "name" => "name",
        ], $this->container);

        $this->assertSame("name", $model->getName());
    }


    /**
     * Ensure we can get the version attribute from our model [OsVersion].
     */
    public function testGetVersion(): void
    {
        $model = OsVersion::load([
            "version" => "version",
        ], $this->container);

        $this->assertSame("version", $model->getVersion());
    }


    /**
     * Ensure we can get the major attribute from our model [OsVersion].
     */
    public function testGetMajor(): void
    {
        $model = OsVersion::load([
            "major" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getMajor());
    }


    /**
     * Ensure we can get the minor attribute from our model [OsVersion].
     */
    public function testGetMinor(): void
    {
        $model = OsVersion::load([
            "minor" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getMinor());
    }


    /**
     * Ensure we can get the patch attribute from our model [OsVersion].
     */
    public function testGetPatch(): void
    {
        $model = OsVersion::load([
            "patch" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getPatch());
    }


    /**
     * Ensure we can get the build attribute from our model [OsVersion].
     */
    public function testGetBuild(): void
    {
        $model = OsVersion::load([
            "build" => "build",
        ], $this->container);

        $this->assertSame("build", $model->getBuild());
    }


    /**
     * Ensure we can get the platform attribute from our model [OsVersion].
     */
    public function testGetPlatform(): void
    {
        $model = OsVersion::load([
            "platform" => "platform",
        ], $this->container);

        $this->assertSame("platform", $model->getPlatform());
    }


    /**
     * Ensure we can get the platform_like attribute from our model [OsVersion].
     */
    public function testGetPlatformLike(): void
    {
        $model = OsVersion::load([
            "platform_like" => "platform_like",
        ], $this->container);

        $this->assertSame("platform_like", $model->getPlatformLike());
    }


    /**
     * Ensure we can get the codename attribute from our model [OsVersion].
     */
    public function testGetCodename(): void
    {
        $model = OsVersion::load([
            "codename" => "codename",
        ], $this->container);

        $this->assertSame("codename", $model->getCodename());
    }


    /**
     * Ensure we can get the install_date attribute from our model [OsVersion].
     */
    public function testGetInstallDate(): void
    {
        $model = OsVersion::load([
            "install_date" => "install_date",
        ], $this->container);

        $this->assertSame("install_date", $model->getInstallDate());
    }
}
