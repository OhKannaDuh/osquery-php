<?php

namespace OhKannaDuh\OsQuery\Exceptions;

use OhKannaDuh\OsQuery\Exception;

class AttributeTypeNotFound extends Exception
{


        /**
     * @param string $attribute
     * @param array<string,mixed> $attributes
     */
    public function __construct(string $attribute, string $model, array $attributes)
    {
        $keys = implode(", ", array_keys($attributes));

        parent::__construct("Type for attribute [{$attribute}] not found on model [{$model}]. Attributes [{$keys}].");
    }
}
