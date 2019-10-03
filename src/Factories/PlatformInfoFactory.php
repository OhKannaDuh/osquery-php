<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\PlatformInfo;

final class PlatformInfoFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new PlatformInfo();
    }
}
