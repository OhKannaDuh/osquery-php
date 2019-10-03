<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\ListeningPorts;
use OhKannaDuh\OsQueryTests\TestCase;

final class ListeningPortsTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the pid attribute from our model [ListeningPorts].
     */
    public function testGetPid(): void
    {
        $model = ListeningPorts::load([
            "pid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getPid());
    }


    /**
     * Ensure we can get the port attribute from our model [ListeningPorts].
     */
    public function testGetPort(): void
    {
        $model = ListeningPorts::load([
            "port" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getPort());
    }


    /**
     * Ensure we can get the protocol attribute from our model [ListeningPorts].
     */
    public function testGetProtocol(): void
    {
        $model = ListeningPorts::load([
            "protocol" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getProtocol());
    }


    /**
     * Ensure we can get the family attribute from our model [ListeningPorts].
     */
    public function testGetFamily(): void
    {
        $model = ListeningPorts::load([
            "family" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getFamily());
    }


    /**
     * Ensure we can get the address attribute from our model [ListeningPorts].
     */
    public function testGetAddress(): void
    {
        $model = ListeningPorts::load([
            "address" => "address",
        ], $this->container);

        $this->assertSame("address", $model->getAddress());
    }


    /**
     * Ensure we can get the fd attribute from our model [ListeningPorts].
     */
    public function testGetFd(): void
    {
        $model = ListeningPorts::load([
            "fd" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getFd());
    }


    /**
     * Ensure we can get the socket attribute from our model [ListeningPorts].
     */
    public function testGetSocket(): void
    {
        $model = ListeningPorts::load([
            "socket" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getSocket());
    }


    /**
     * Ensure we can get the path attribute from our model [ListeningPorts].
     */
    public function testGetPath(): void
    {
        $model = ListeningPorts::load([
            "path" => "path",
        ], $this->container);

        $this->assertSame("path", $model->getPath());
    }


    /**
     * Ensure we can get the net_namespace attribute from our model [ListeningPorts].
     */
    public function testGetNetNamespace(): void
    {
        $model = ListeningPorts::load([
            "net_namespace" => "net_namespace",
        ], $this->container);

        $this->assertSame("net_namespace", $model->getNetNamespace());
    }
}
