<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\OsquerySchedule;

final class OsqueryScheduleFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new OsquerySchedule();
    }
}
