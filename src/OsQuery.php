<?php

namespace OhKannaDuh\OsQuery;

class OsQuery
{


    /**
     * @codeCoverageIgnore
     *
     * @param string $query
     *
     * @return array
     */
    public function query(string $query): array
    {
        $lines = [];
        # '--logger_min_status 1' disables database.cpp output
        exec("osqueryi \"{$query};\" --json --logger_min_status 1", $lines);
        $output = implode("\n", $lines);

        return json_decode($output, true);
    }
}
