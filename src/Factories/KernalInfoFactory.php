<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\KernalInfo;

final class KernalInfoFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new KernalInfo();
    }
}
