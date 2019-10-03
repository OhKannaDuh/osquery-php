<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\Routes;
use OhKannaDuh\OsQueryTests\TestCase;

final class RoutesTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the destination attribute from our model [Routes].
     */
    public function testGetDestination(): void
    {
        $model = Routes::load([
            "destination" => "destination",
        ], $this->container);

        $this->assertSame("destination", $model->getDestination());
    }


    /**
     * Ensure we can get the netmask attribute from our model [Routes].
     */
    public function testGetNetmask(): void
    {
        $model = Routes::load([
            "netmask" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getNetmask());
    }


    /**
     * Ensure we can get the gateway attribute from our model [Routes].
     */
    public function testGetGateway(): void
    {
        $model = Routes::load([
            "gateway" => "gateway",
        ], $this->container);

        $this->assertSame("gateway", $model->getGateway());
    }


    /**
     * Ensure we can get the source attribute from our model [Routes].
     */
    public function testGetSource(): void
    {
        $model = Routes::load([
            "source" => "source",
        ], $this->container);

        $this->assertSame("source", $model->getSource());
    }


    /**
     * Ensure we can get the flags attribute from our model [Routes].
     */
    public function testGetFlags(): void
    {
        $model = Routes::load([
            "flags" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getFlags());
    }


    /**
     * Ensure we can get the interface attribute from our model [Routes].
     */
    public function testGetInterface(): void
    {
        $model = Routes::load([
            "interface" => "interface",
        ], $this->container);

        $this->assertSame("interface", $model->getInterface());
    }


    /**
     * Ensure we can get the mtu attribute from our model [Routes].
     */
    public function testGetMtu(): void
    {
        $model = Routes::load([
            "mtu" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getMtu());
    }


    /**
     * Ensure we can get the metric attribute from our model [Routes].
     */
    public function testGetMetric(): void
    {
        $model = Routes::load([
            "metric" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getMetric());
    }


    /**
     * Ensure we can get the type attribute from our model [Routes].
     */
    public function testGetType(): void
    {
        $model = Routes::load([
            "type" => "type",
        ], $this->container);

        $this->assertSame("type", $model->getType());
    }


    /**
     * Ensure we can get the hopcount attribute from our model [Routes].
     */
    public function testGetHopcount(): void
    {
        $model = Routes::load([
            "hopcount" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getHopcount());
    }
}
