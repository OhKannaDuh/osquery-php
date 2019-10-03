<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\EtcHosts;
use OhKannaDuh\OsQueryTests\TestCase;

final class EtcHostsTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the address attribute from our model [EtcHosts].
     */
    public function testGetAddress(): void
    {
        $model = EtcHosts::load([
            "address" => "address",
        ], $this->container);

        $this->assertSame("address", $model->getAddress());
    }


    /**
     * Ensure we can get the hostnames attribute from our model [EtcHosts].
     */
    public function testGetHostnames(): void
    {
        $model = EtcHosts::load([
            "hostnames" => "hostnames",
        ], $this->container);

        $this->assertSame("hostnames", $model->getHostnames());
    }
}
