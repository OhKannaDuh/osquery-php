<?php

namespace OhKannaDuh\OsQuery\Factories;

use OhKannaDuh\OsQuery\Factory;
use OhKannaDuh\OsQuery\Model;
use OhKannaDuh\OsQuery\Models\CurlCertificate;

final class CurlCertificateFactory extends Factory
{


    /** @inheritDoc */
    protected function getModel(): Model
    {
        return new CurlCertificate();
    }
}
