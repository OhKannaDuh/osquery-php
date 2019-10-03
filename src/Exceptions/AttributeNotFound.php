<?php

namespace OhKannaDuh\OsQuery\Exceptions;

use OhKannaDuh\OsQuery\Exception;

class AttributeNotFound extends Exception
{


    /**
     * @param string $attribute
     * @param array<string,mixed> $data
     */
    public function __construct(string $attribute, string $model, array $data)
    {
        $keys = implode(", ", array_keys($data));

        parent::__construct("Attribute [{$attribute}] not found on model [{$model}]. Data [{$keys}].");
    }
}
