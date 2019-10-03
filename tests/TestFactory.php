<?php

namespace OhKannaDuh\OsQueryTests;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;

/**
 * This model is used to test the base Factory [OhKannaDuh\OsQuery\Factory]
 */
final class TestFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new TestModel();
    }
}
