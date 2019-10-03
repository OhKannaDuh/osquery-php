<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\AtomPackages;
use OhKannaDuh\OsQueryTests\TestCase;

final class AtomPackagesTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the name attribute from our model [AtomPackages].
     */
    public function testGetName(): void
    {
        $model = AtomPackages::load([
            "name" => "name",
        ], $this->container);

        $this->assertSame("name", $model->getName());
    }


    /**
     * Ensure we can get the version attribute from our model [AtomPackages].
     */
    public function testGetVersion(): void
    {
        $model = AtomPackages::load([
            "version" => "version",
        ], $this->container);

        $this->assertSame("version", $model->getVersion());
    }


    /**
     * Ensure we can get the description attribute from our model [AtomPackages].
     */
    public function testGetDescription(): void
    {
        $model = AtomPackages::load([
            "description" => "description",
        ], $this->container);

        $this->assertSame("description", $model->getDescription());
    }


    /**
     * Ensure we can get the path attribute from our model [AtomPackages].
     */
    public function testGetPath(): void
    {
        $model = AtomPackages::load([
            "path" => "path",
        ], $this->container);

        $this->assertSame("path", $model->getPath());
    }


    /**
     * Ensure we can get the license attribute from our model [AtomPackages].
     */
    public function testGetLicense(): void
    {
        $model = AtomPackages::load([
            "license" => "license",
        ], $this->container);

        $this->assertSame("license", $model->getLicense());
    }


    /**
     * Ensure we can get the homepage attribute from our model [AtomPackages].
     */
    public function testGetHomepage(): void
    {
        $model = AtomPackages::load([
            "homepage" => "homepage",
        ], $this->container);

        $this->assertSame("homepage", $model->getHomepage());
    }
}
