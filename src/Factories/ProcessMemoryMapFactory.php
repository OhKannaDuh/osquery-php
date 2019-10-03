<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\ProcessMemoryMap;

final class ProcessMemoryMapFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new ProcessMemoryMap();
    }
}
