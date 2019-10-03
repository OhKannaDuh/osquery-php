<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\Group;

final class GroupFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new Group();
    }
}
