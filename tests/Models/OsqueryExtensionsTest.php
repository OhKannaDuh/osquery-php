<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\OsqueryExtensions;
use OhKannaDuh\OsQueryTests\TestCase;

final class OsqueryExtensionsTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the uuid attribute from our model [OsqueryExtensions].
     */
    public function testGetUuid(): void
    {
        $model = OsqueryExtensions::load([
            "uuid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getUuid());
    }


    /**
     * Ensure we can get the name attribute from our model [OsqueryExtensions].
     */
    public function testGetName(): void
    {
        $model = OsqueryExtensions::load([
            "name" => "name",
        ], $this->container);

        $this->assertSame("name", $model->getName());
    }


    /**
     * Ensure we can get the version attribute from our model [OsqueryExtensions].
     */
    public function testGetVersion(): void
    {
        $model = OsqueryExtensions::load([
            "version" => "version",
        ], $this->container);

        $this->assertSame("version", $model->getVersion());
    }


    /**
     * Ensure we can get the sdk_version attribute from our model [OsqueryExtensions].
     */
    public function testGetSdkVersion(): void
    {
        $model = OsqueryExtensions::load([
            "sdk_version" => "sdk_version",
        ], $this->container);

        $this->assertSame("sdk_version", $model->getSdkVersion());
    }


    /**
     * Ensure we can get the path attribute from our model [OsqueryExtensions].
     */
    public function testGetPath(): void
    {
        $model = OsqueryExtensions::load([
            "path" => "path",
        ], $this->container);

        $this->assertSame("path", $model->getPath());
    }


    /**
     * Ensure we can get the type attribute from our model [OsqueryExtensions].
     */
    public function testGetType(): void
    {
        $model = OsqueryExtensions::load([
            "type" => "type",
        ], $this->container);

        $this->assertSame("type", $model->getType());
    }
}
