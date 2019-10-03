<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\OsqueryEvents;

final class OsqueryEventsFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new OsqueryEvents();
    }
}
