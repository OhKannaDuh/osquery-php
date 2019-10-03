<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\Carves;

final class CarvesFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new Carves();
    }
}
