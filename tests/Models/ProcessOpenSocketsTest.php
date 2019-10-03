<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\ProcessOpenSockets;
use OhKannaDuh\OsQueryTests\TestCase;

final class ProcessOpenSocketsTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the pid attribute from our model [ProcessOpenSockets].
     */
    public function testGetPid(): void
    {
        $model = ProcessOpenSockets::load([
            "pid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getPid());
    }


    /**
     * Ensure we can get the fd attribute from our model [ProcessOpenSockets].
     */
    public function testGetFd(): void
    {
        $model = ProcessOpenSockets::load([
            "fd" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getFd());
    }


    /**
     * Ensure we can get the socket attribute from our model [ProcessOpenSockets].
     */
    public function testGetSocket(): void
    {
        $model = ProcessOpenSockets::load([
            "socket" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getSocket());
    }


    /**
     * Ensure we can get the family attribute from our model [ProcessOpenSockets].
     */
    public function testGetFamily(): void
    {
        $model = ProcessOpenSockets::load([
            "family" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getFamily());
    }


    /**
     * Ensure we can get the protocol attribute from our model [ProcessOpenSockets].
     */
    public function testGetProtocol(): void
    {
        $model = ProcessOpenSockets::load([
            "protocol" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getProtocol());
    }


    /**
     * Ensure we can get the local_address attribute from our model [ProcessOpenSockets].
     */
    public function testGetLocalAddress(): void
    {
        $model = ProcessOpenSockets::load([
            "local_address" => "local_address",
        ], $this->container);

        $this->assertSame("local_address", $model->getLocalAddress());
    }


    /**
     * Ensure we can get the remote_address attribute from our model [ProcessOpenSockets].
     */
    public function testGetRemoteAddress(): void
    {
        $model = ProcessOpenSockets::load([
            "remote_address" => "remote_address",
        ], $this->container);

        $this->assertSame("remote_address", $model->getRemoteAddress());
    }


    /**
     * Ensure we can get the local_port attribute from our model [ProcessOpenSockets].
     */
    public function testGetLocalPort(): void
    {
        $model = ProcessOpenSockets::load([
            "local_port" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getLocalPort());
    }


    /**
     * Ensure we can get the remote_port attribute from our model [ProcessOpenSockets].
     */
    public function testGetRemotePort(): void
    {
        $model = ProcessOpenSockets::load([
            "remote_port" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getRemotePort());
    }


    /**
     * Ensure we can get the path attribute from our model [ProcessOpenSockets].
     */
    public function testGetPath(): void
    {
        $model = ProcessOpenSockets::load([
            "path" => "path",
        ], $this->container);

        $this->assertSame("path", $model->getPath());
    }


    /**
     * Ensure we can get the state attribute from our model [ProcessOpenSockets].
     */
    public function testGetState(): void
    {
        $model = ProcessOpenSockets::load([
            "state" => "state",
        ], $this->container);

        $this->assertSame("state", $model->getState());
    }


    /**
     * Ensure we can get the net_namespace attribute from our model [ProcessOpenSockets].
     */
    public function testGetNetNamespace(): void
    {
        $model = ProcessOpenSockets::load([
            "net_namespace" => "net_namespace",
        ], $this->container);

        $this->assertSame("net_namespace", $model->getNetNamespace());
    }
}
