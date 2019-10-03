<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class IntelMeInfo extends Model
{
    /** @inheritDoc */
    protected $table = "intel_me_info";

    /** @inheritDoc */
    protected $attributes = [
        "version" => "string",
    ];


    /** @return string */
    public function getVersion(): string
    {
        $value = $this->getAttribute("version");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("version", $value, "string");
    }
}
