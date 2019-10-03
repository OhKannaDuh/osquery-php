<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\ListeningPorts;

final class ListeningPortsFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new ListeningPorts();
    }
}
