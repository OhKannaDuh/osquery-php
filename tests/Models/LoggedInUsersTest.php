<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\LoggedInUsers;
use OhKannaDuh\OsQueryTests\TestCase;

final class LoggedInUsersTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the type attribute from our model [LoggedInUsers].
     */
    public function testGetType(): void
    {
        $model = LoggedInUsers::load([
            "type" => "type",
        ], $this->container);

        $this->assertSame("type", $model->getType());
    }


    /**
     * Ensure we can get the user attribute from our model [LoggedInUsers].
     */
    public function testGetUser(): void
    {
        $model = LoggedInUsers::load([
            "user" => "user",
        ], $this->container);

        $this->assertSame("user", $model->getUser());
    }


    /**
     * Ensure we can get the tty attribute from our model [LoggedInUsers].
     */
    public function testGetTty(): void
    {
        $model = LoggedInUsers::load([
            "tty" => "tty",
        ], $this->container);

        $this->assertSame("tty", $model->getTty());
    }


    /**
     * Ensure we can get the host attribute from our model [LoggedInUsers].
     */
    public function testGetHost(): void
    {
        $model = LoggedInUsers::load([
            "host" => "host",
        ], $this->container);

        $this->assertSame("host", $model->getHost());
    }


    /**
     * Ensure we can get the time attribute from our model [LoggedInUsers].
     */
    public function testGetTime(): void
    {
        $model = LoggedInUsers::load([
            "time" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getTime());
    }


    /**
     * Ensure we can get the pid attribute from our model [LoggedInUsers].
     */
    public function testGetPid(): void
    {
        $model = LoggedInUsers::load([
            "pid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getPid());
    }


    /**
     * Ensure we can get the sid attribute from our model [LoggedInUsers].
     */
    public function testGetSid(): void
    {
        $model = LoggedInUsers::load([
            "sid" => "sid",
        ], $this->container);

        $this->assertSame("sid", $model->getSid());
    }


    /**
     * Ensure we can get the registry_hive attribute from our model [LoggedInUsers].
     */
    public function testGetRegistryHive(): void
    {
        $model = LoggedInUsers::load([
            "registry_hive" => "registry_hive",
        ], $this->container);

        $this->assertSame("registry_hive", $model->getRegistryHive());
    }
}
