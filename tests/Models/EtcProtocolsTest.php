<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\EtcProtocols;
use OhKannaDuh\OsQueryTests\TestCase;

final class EtcProtocolsTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the name attribute from our model [EtcProtocols].
     */
    public function testGetName(): void
    {
        $model = EtcProtocols::load([
            "name" => "name",
        ], $this->container);

        $this->assertSame("name", $model->getName());
    }


    /**
     * Ensure we can get the number attribute from our model [EtcProtocols].
     */
    public function testGetNumber(): void
    {
        $model = EtcProtocols::load([
            "number" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getNumber());
    }


    /**
     * Ensure we can get the alias attribute from our model [EtcProtocols].
     */
    public function testGetAlias(): void
    {
        $model = EtcProtocols::load([
            "alias" => "alias",
        ], $this->container);

        $this->assertSame("alias", $model->getAlias());
    }


    /**
     * Ensure we can get the comment attribute from our model [EtcProtocols].
     */
    public function testGetComment(): void
    {
        $model = EtcProtocols::load([
            "comment" => "comment",
        ], $this->container);

        $this->assertSame("comment", $model->getComment());
    }
}
