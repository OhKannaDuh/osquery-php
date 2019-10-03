<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\OsqueryFlags;
use OhKannaDuh\OsQueryTests\TestCase;

final class OsqueryFlagsTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the name attribute from our model [OsqueryFlags].
     */
    public function testGetName(): void
    {
        $model = OsqueryFlags::load([
            "name" => "name",
        ], $this->container);

        $this->assertSame("name", $model->getName());
    }


    /**
     * Ensure we can get the type attribute from our model [OsqueryFlags].
     */
    public function testGetType(): void
    {
        $model = OsqueryFlags::load([
            "type" => "type",
        ], $this->container);

        $this->assertSame("type", $model->getType());
    }


    /**
     * Ensure we can get the description attribute from our model [OsqueryFlags].
     */
    public function testGetDescription(): void
    {
        $model = OsqueryFlags::load([
            "description" => "description",
        ], $this->container);

        $this->assertSame("description", $model->getDescription());
    }


    /**
     * Ensure we can get the default_value attribute from our model [OsqueryFlags].
     */
    public function testGetDefaultValue(): void
    {
        $model = OsqueryFlags::load([
            "default_value" => "default_value",
        ], $this->container);

        $this->assertSame("default_value", $model->getDefaultValue());
    }


    /**
     * Ensure we can get the value attribute from our model [OsqueryFlags].
     */
    public function testGetValue(): void
    {
        $model = OsqueryFlags::load([
            "value" => "value",
        ], $this->container);

        $this->assertSame("value", $model->getValue());
    }


    /**
     * Ensure we can get the shell_only attribute from our model [OsqueryFlags].
     */
    public function testGetShellOnly(): void
    {
        $model = OsqueryFlags::load([
            "shell_only" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getShellOnly());
    }
}
