<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\InterfaceDetails;

final class InterfaceDetailsFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new InterfaceDetails();
    }
}
