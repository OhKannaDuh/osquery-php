<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\User;

final class UserFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new User();
    }
}
