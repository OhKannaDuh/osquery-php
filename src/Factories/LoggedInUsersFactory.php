<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\LoggedInUsers;

final class LoggedInUsersFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new LoggedInUsers();
    }
}
