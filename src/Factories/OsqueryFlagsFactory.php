<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\OsqueryFlags;

final class OsqueryFlagsFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new OsqueryFlags();
    }
}
