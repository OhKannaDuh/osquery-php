<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\IntelMeInfo;
use OhKannaDuh\OsQueryTests\TestCase;

final class IntelMeInfoTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the version attribute from our model [IntelMeInfo].
     */
    public function testGetVersion(): void
    {
        $model = IntelMeInfo::load([
            "version" => "version",
        ], $this->container);

        $this->assertSame("version", $model->getVersion());
    }
}
