<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\Time;

final class TimeFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new Time();
    }
}
