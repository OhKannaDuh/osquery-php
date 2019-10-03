<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\Hash;

final class HashFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new Hash();
    }
}
