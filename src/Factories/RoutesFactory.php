<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\Routes;

final class RoutesFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new Routes();
    }
}
