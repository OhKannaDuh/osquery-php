<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\OsqueryEvents;
use OhKannaDuh\OsQueryTests\TestCase;

final class OsqueryEventsTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the name attribute from our model [OsqueryEvents].
     */
    public function testGetName(): void
    {
        $model = OsqueryEvents::load([
            "name" => "name",
        ], $this->container);

        $this->assertSame("name", $model->getName());
    }


    /**
     * Ensure we can get the publisher attribute from our model [OsqueryEvents].
     */
    public function testGetPublisher(): void
    {
        $model = OsqueryEvents::load([
            "publisher" => "publisher",
        ], $this->container);

        $this->assertSame("publisher", $model->getPublisher());
    }


    /**
     * Ensure we can get the type attribute from our model [OsqueryEvents].
     */
    public function testGetType(): void
    {
        $model = OsqueryEvents::load([
            "type" => "type",
        ], $this->container);

        $this->assertSame("type", $model->getType());
    }


    /**
     * Ensure we can get the subscriptions attribute from our model [OsqueryEvents].
     */
    public function testGetSubscriptions(): void
    {
        $model = OsqueryEvents::load([
            "subscriptions" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getSubscriptions());
    }


    /**
     * Ensure we can get the events attribute from our model [OsqueryEvents].
     */
    public function testGetEvents(): void
    {
        $model = OsqueryEvents::load([
            "events" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getEvents());
    }


    /**
     * Ensure we can get the refreshes attribute from our model [OsqueryEvents].
     */
    public function testGetRefreshes(): void
    {
        $model = OsqueryEvents::load([
            "refreshes" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getRefreshes());
    }


    /**
     * Ensure we can get the active attribute from our model [OsqueryEvents].
     */
    public function testGetActive(): void
    {
        $model = OsqueryEvents::load([
            "active" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getActive());
    }
}
