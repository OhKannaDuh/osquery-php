<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\Curl;

final class CurlFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new Curl();
    }
}
