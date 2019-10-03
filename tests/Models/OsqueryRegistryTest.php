<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\OsqueryRegistry;
use OhKannaDuh\OsQueryTests\TestCase;

final class OsqueryRegistryTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the registry attribute from our model [OsqueryRegistry].
     */
    public function testGetRegistry(): void
    {
        $model = OsqueryRegistry::load([
            "registry" => "registry",
        ], $this->container);

        $this->assertSame("registry", $model->getRegistry());
    }


    /**
     * Ensure we can get the name attribute from our model [OsqueryRegistry].
     */
    public function testGetName(): void
    {
        $model = OsqueryRegistry::load([
            "name" => "name",
        ], $this->container);

        $this->assertSame("name", $model->getName());
    }


    /**
     * Ensure we can get the owner_uuid attribute from our model [OsqueryRegistry].
     */
    public function testGetOwnerUuid(): void
    {
        $model = OsqueryRegistry::load([
            "owner_uuid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getOwnerUuid());
    }


    /**
     * Ensure we can get the internal attribute from our model [OsqueryRegistry].
     */
    public function testGetInternal(): void
    {
        $model = OsqueryRegistry::load([
            "internal" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getInternal());
    }


    /**
     * Ensure we can get the active attribute from our model [OsqueryRegistry].
     */
    public function testGetActive(): void
    {
        $model = OsqueryRegistry::load([
            "active" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getActive());
    }
}
