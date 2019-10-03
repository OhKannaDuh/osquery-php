<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\CarbonBlackInfo;

final class CarbonBlackInfoFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new CarbonBlackInfo();
    }
}
