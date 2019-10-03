<?php

namespace OhKannaDuh\OsQueryTests;

use OhKannaDuh\OsQuery\Model;

/**
 * This model is used to test the base Model [OhKannaDuh\OsQuery\Model]
 */
final class TestModel extends Model
{
    /** @inheritDoc */
    protected $table = "tests";

    /** @inheritDoc */
    protected $attributes = [
        "id" => "int",
        "name" => "string",
        "comment" => "string",
        "hidden" => "bool",
    ];
}
