<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\OsqueryPacks;

final class OsqueryPacksFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new OsqueryPacks();
    }
}
