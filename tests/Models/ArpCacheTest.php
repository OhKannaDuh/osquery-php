<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\ArpCache;
use OhKannaDuh\OsQueryTests\TestCase;

final class ArpCacheTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the address attribute from our model [ArpCache].
     */
    public function testGetAddress(): void
    {
        $model = ArpCache::load([
            "address" => "address",
        ], $this->container);

        $this->assertSame("address", $model->getAddress());
    }


    /**
     * Ensure we can get the mac attribute from our model [ArpCache].
     */
    public function testGetMac(): void
    {
        $model = ArpCache::load([
            "mac" => "mac",
        ], $this->container);

        $this->assertSame("mac", $model->getMac());
    }


    /**
     * Ensure we can get the interface attribute from our model [ArpCache].
     */
    public function testGetInterface(): void
    {
        $model = ArpCache::load([
            "interface" => "interface",
        ], $this->container);

        $this->assertSame("interface", $model->getInterface());
    }


    /**
     * Ensure we can get the permanent attribute from our model [ArpCache].
     */
    public function testGetPermanent(): void
    {
        $model = ArpCache::load([
            "permanent" => "permanent",
        ], $this->container);

        $this->assertSame("permanent", $model->getPermanent());
    }
}
