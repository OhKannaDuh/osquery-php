<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\OsqueryPacks;
use OhKannaDuh\OsQueryTests\TestCase;

final class OsqueryPacksTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the name attribute from our model [OsqueryPacks].
     */
    public function testGetName(): void
    {
        $model = OsqueryPacks::load([
            "name" => "name",
        ], $this->container);

        $this->assertSame("name", $model->getName());
    }


    /**
     * Ensure we can get the platform attribute from our model [OsqueryPacks].
     */
    public function testGetPlatform(): void
    {
        $model = OsqueryPacks::load([
            "platform" => "platform",
        ], $this->container);

        $this->assertSame("platform", $model->getPlatform());
    }


    /**
     * Ensure we can get the version attribute from our model [OsqueryPacks].
     */
    public function testGetVersion(): void
    {
        $model = OsqueryPacks::load([
            "version" => "version",
        ], $this->container);

        $this->assertSame("version", $model->getVersion());
    }


    /**
     * Ensure we can get the shard attribute from our model [OsqueryPacks].
     */
    public function testGetShard(): void
    {
        $model = OsqueryPacks::load([
            "shard" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getShard());
    }


    /**
     * Ensure we can get the discovery_cache_hits attribute from our model [OsqueryPacks].
     */
    public function testGetDiscoveryCacheHits(): void
    {
        $model = OsqueryPacks::load([
            "discovery_cache_hits" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getDiscoveryCacheHits());
    }


    /**
     * Ensure we can get the discovery_executions attribute from our model [OsqueryPacks].
     */
    public function testGetDiscoveryExecutions(): void
    {
        $model = OsqueryPacks::load([
            "discovery_executions" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getDiscoveryExecutions());
    }


    /**
     * Ensure we can get the active attribute from our model [OsqueryPacks].
     */
    public function testGetActive(): void
    {
        $model = OsqueryPacks::load([
            "active" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getActive());
    }
}
