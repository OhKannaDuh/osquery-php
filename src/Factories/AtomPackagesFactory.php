<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\AtomPackages;

final class AtomPackagesFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new AtomPackages();
    }
}
