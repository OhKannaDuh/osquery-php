<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\Uptime;
use OhKannaDuh\OsQueryTests\TestCase;

final class UptimeTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the days attribute from our model [Uptime].
     */
    public function testGetDays(): void
    {
        $model = Uptime::load([
            "days" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getDays());
    }


    /**
     * Ensure we can get the hours attribute from our model [Uptime].
     */
    public function testGetHours(): void
    {
        $model = Uptime::load([
            "hours" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getHours());
    }


    /**
     * Ensure we can get the minutes attribute from our model [Uptime].
     */
    public function testGetMinutes(): void
    {
        $model = Uptime::load([
            "minutes" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getMinutes());
    }


    /**
     * Ensure we can get the seconds attribute from our model [Uptime].
     */
    public function testGetSeconds(): void
    {
        $model = Uptime::load([
            "seconds" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getSeconds());
    }


    /**
     * Ensure we can get the total_seconds attribute from our model [Uptime].
     */
    public function testGetTotalSeconds(): void
    {
        $model = Uptime::load([
            "total_seconds" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getTotalSeconds());
    }
}
