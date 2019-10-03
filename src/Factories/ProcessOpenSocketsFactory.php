<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\ProcessOpenSockets;

final class ProcessOpenSocketsFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new ProcessOpenSockets();
    }
}
