<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\File;

final class FileFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new File();
    }
}
