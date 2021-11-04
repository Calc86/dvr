<?php

namespace dvr\system;

/**
 * Static helpers functions
 */
class Helpers
{
    const URL = '{scheme}://{host}:{port}/{path}';

    public static function applyParams(array $params, string $command): string {
        $keys = array_keys($params);
        $search = [];
        foreach ($keys as $item)
            $search[] = '{'.$item.'}';

        $replace = array_values($params);
        return str_replace($search, $replace, $command);
    }
}
