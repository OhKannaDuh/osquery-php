<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\Time;
use OhKannaDuh\OsQueryTests\TestCase;

final class TimeTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the weekday attribute from our model [Time].
     */
    public function testGetWeekday(): void
    {
        $model = Time::load([
            "weekday" => "weekday",
        ], $this->container);

        $this->assertSame("weekday", $model->getWeekday());
    }


    /**
     * Ensure we can get the year attribute from our model [Time].
     */
    public function testGetYear(): void
    {
        $model = Time::load([
            "year" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getYear());
    }


    /**
     * Ensure we can get the month attribute from our model [Time].
     */
    public function testGetMonth(): void
    {
        $model = Time::load([
            "month" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getMonth());
    }


    /**
     * Ensure we can get the day attribute from our model [Time].
     */
    public function testGetDay(): void
    {
        $model = Time::load([
            "day" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getDay());
    }


    /**
     * Ensure we can get the hour attribute from our model [Time].
     */
    public function testGetHour(): void
    {
        $model = Time::load([
            "hour" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getHour());
    }


    /**
     * Ensure we can get the minutes attribute from our model [Time].
     */
    public function testGetMinutes(): void
    {
        $model = Time::load([
            "minutes" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getMinutes());
    }


    /**
     * Ensure we can get the seconds attribute from our model [Time].
     */
    public function testGetSeconds(): void
    {
        $model = Time::load([
            "seconds" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getSeconds());
    }


    /**
     * Ensure we can get the timezone attribute from our model [Time].
     */
    public function testGetTimezone(): void
    {
        $model = Time::load([
            "timezone" => "timezone",
        ], $this->container);

        $this->assertSame("timezone", $model->getTimezone());
    }


    /**
     * Ensure we can get the local_time attribute from our model [Time].
     */
    public function testGetLocalTime(): void
    {
        $model = Time::load([
            "local_time" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getLocalTime());
    }


    /**
     * Ensure we can get the local_timezone attribute from our model [Time].
     */
    public function testGetLocalTimezone(): void
    {
        $model = Time::load([
            "local_timezone" => "local_timezone",
        ], $this->container);

        $this->assertSame("local_timezone", $model->getLocalTimezone());
    }


    /**
     * Ensure we can get the unix_time attribute from our model [Time].
     */
    public function testGetUnixTime(): void
    {
        $model = Time::load([
            "unix_time" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getUnixTime());
    }


    /**
     * Ensure we can get the timestamp attribute from our model [Time].
     */
    public function testGetTimestamp(): void
    {
        $model = Time::load([
            "timestamp" => "timestamp",
        ], $this->container);

        $this->assertSame("timestamp", $model->getTimestamp());
    }


    /**
     * Ensure we can get the datetime attribute from our model [Time].
     */
    public function testGetDatetime(): void
    {
        $model = Time::load([
            "datetime" => "datetime",
        ], $this->container);

        $this->assertSame("datetime", $model->getDatetime());
    }


    /**
     * Ensure we can get the iso_8601 attribute from our model [Time].
     */
    public function testGetIso8601(): void
    {
        $model = Time::load([
            "iso_8601" => "iso_8601",
        ], $this->container);

        $this->assertSame("iso_8601", $model->getIso8601());
    }


    /**
     * Ensure we can get the win_timestamp attribute from our model [Time].
     */
    public function testGetWinTimestamp(): void
    {
        $model = Time::load([
            "win_timestamp" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getWinTimestamp());
    }
}
