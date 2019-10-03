<?php

namespace OhKannaDuh\OsQuery\Exceptions;

use OhKannaDuh\OsQuery\Exception;

class InvalidAttributeTypeException extends Exception
{


    /**
     * @param string $key
     * @param string|int|bool $value
     * @param string $type
     */
    public function __construct(string $key, $value, string $type)
    {
        $actualType = gettype($value);

        parent::__construct("Type for attribute [{$key}] not is '{$actualType}' [{$value}], expected '{$type}'");
    }
}
