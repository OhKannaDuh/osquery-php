<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\OsqueryInfo;

final class OsqueryInfoFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new OsqueryInfo();
    }
}
