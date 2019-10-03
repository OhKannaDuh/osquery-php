<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\Curl;
use OhKannaDuh\OsQueryTests\TestCase;

final class CurlTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the url attribute from our model [Curl].
     */
    public function testGetUrl(): void
    {
        $model = Curl::load([
            "url" => "url",
        ], $this->container);

        $this->assertSame("url", $model->getUrl());
    }


    /**
     * Ensure we can get the method attribute from our model [Curl].
     */
    public function testGetMethod(): void
    {
        $model = Curl::load([
            "method" => "method",
        ], $this->container);

        $this->assertSame("method", $model->getMethod());
    }


    /**
     * Ensure we can get the user_agent attribute from our model [Curl].
     */
    public function testGetUserAgent(): void
    {
        $model = Curl::load([
            "user_agent" => "user_agent",
        ], $this->container);

        $this->assertSame("user_agent", $model->getUserAgent());
    }


    /**
     * Ensure we can get the response_code attribute from our model [Curl].
     */
    public function testGetResponseCode(): void
    {
        $model = Curl::load([
            "response_code" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getResponseCode());
    }


    /**
     * Ensure we can get the round_trip_time attribute from our model [Curl].
     */
    public function testGetRoundTripTime(): void
    {
        $model = Curl::load([
            "round_trip_time" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getRoundTripTime());
    }


    /**
     * Ensure we can get the bytes attribute from our model [Curl].
     */
    public function testGetBytes(): void
    {
        $model = Curl::load([
            "bytes" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getBytes());
    }


    /**
     * Ensure we can get the result attribute from our model [Curl].
     */
    public function testGetResult(): void
    {
        $model = Curl::load([
            "result" => "result",
        ], $this->container);

        $this->assertSame("result", $model->getResult());
    }
}
