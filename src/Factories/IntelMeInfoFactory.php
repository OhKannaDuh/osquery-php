<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\IntelMeInfo;

final class IntelMeInfoFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new IntelMeInfo();
    }
}
