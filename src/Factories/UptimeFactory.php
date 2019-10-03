<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\Uptime;

final class UptimeFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new Uptime();
    }
}
