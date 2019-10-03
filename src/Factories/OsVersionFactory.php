<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\OsVersion;

final class OsVersionFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new OsVersion();
    }
}
