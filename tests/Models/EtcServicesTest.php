<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\EtcServices;
use OhKannaDuh\OsQueryTests\TestCase;

final class EtcServicesTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the name attribute from our model [EtcServices].
     */
    public function testGetName(): void
    {
        $model = EtcServices::load([
            "name" => "name",
        ], $this->container);

        $this->assertSame("name", $model->getName());
    }


    /**
     * Ensure we can get the port attribute from our model [EtcServices].
     */
    public function testGetPort(): void
    {
        $model = EtcServices::load([
            "port" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getPort());
    }


    /**
     * Ensure we can get the protocol attribute from our model [EtcServices].
     */
    public function testGetProtocol(): void
    {
        $model = EtcServices::load([
            "protocol" => "protocol",
        ], $this->container);

        $this->assertSame("protocol", $model->getProtocol());
    }


    /**
     * Ensure we can get the aliases attribute from our model [EtcServices].
     */
    public function testGetAliases(): void
    {
        $model = EtcServices::load([
            "aliases" => "aliases",
        ], $this->container);

        $this->assertSame("aliases", $model->getAliases());
    }


    /**
     * Ensure we can get the comment attribute from our model [EtcServices].
     */
    public function testGetComment(): void
    {
        $model = EtcServices::load([
            "comment" => "comment",
        ], $this->container);

        $this->assertSame("comment", $model->getComment());
    }
}
