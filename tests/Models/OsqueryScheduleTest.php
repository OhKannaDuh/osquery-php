<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\OsquerySchedule;
use OhKannaDuh\OsQueryTests\TestCase;

final class OsqueryScheduleTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the name attribute from our model [OsquerySchedule].
     */
    public function testGetName(): void
    {
        $model = OsquerySchedule::load([
            "name" => "name",
        ], $this->container);

        $this->assertSame("name", $model->getName());
    }


    /**
     * Ensure we can get the query attribute from our model [OsquerySchedule].
     */
    public function testGetQuery(): void
    {
        $model = OsquerySchedule::load([
            "query" => "query",
        ], $this->container);

        $this->assertSame("query", $model->getQuery());
    }


    /**
     * Ensure we can get the interval attribute from our model [OsquerySchedule].
     */
    public function testGetInterval(): void
    {
        $model = OsquerySchedule::load([
            "interval" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getInterval());
    }


    /**
     * Ensure we can get the executions attribute from our model [OsquerySchedule].
     */
    public function testGetExecutions(): void
    {
        $model = OsquerySchedule::load([
            "executions" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getExecutions());
    }


    /**
     * Ensure we can get the last_executed attribute from our model [OsquerySchedule].
     */
    public function testGetLastExecuted(): void
    {
        $model = OsquerySchedule::load([
            "last_executed" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getLastExecuted());
    }


    /**
     * Ensure we can get the blacklisted attribute from our model [OsquerySchedule].
     */
    public function testGetBlacklisted(): void
    {
        $model = OsquerySchedule::load([
            "blacklisted" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getBlacklisted());
    }


    /**
     * Ensure we can get the output_size attribute from our model [OsquerySchedule].
     */
    public function testGetOutputSize(): void
    {
        $model = OsquerySchedule::load([
            "output_size" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getOutputSize());
    }


    /**
     * Ensure we can get the wall_time attribute from our model [OsquerySchedule].
     */
    public function testGetWallTime(): void
    {
        $model = OsquerySchedule::load([
            "wall_time" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getWallTime());
    }


    /**
     * Ensure we can get the user_time attribute from our model [OsquerySchedule].
     */
    public function testGetUserTime(): void
    {
        $model = OsquerySchedule::load([
            "user_time" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getUserTime());
    }


    /**
     * Ensure we can get the system_time attribute from our model [OsquerySchedule].
     */
    public function testGetSystemTime(): void
    {
        $model = OsquerySchedule::load([
            "system_time" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getSystemTime());
    }


    /**
     * Ensure we can get the average_memory attribute from our model [OsquerySchedule].
     */
    public function testGetAverageMemory(): void
    {
        $model = OsquerySchedule::load([
            "average_memory" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getAverageMemory());
    }
}
