<?php

namespace app\modules\dvr\components;

/**
 * Static helpers functions
 */
class Helpers
{
    const URL = '{scheme}://{host}:{port}/{path}';

    public static function applyParams(array $params, string $command): string {
        $keys = array_values($params);
        $search = [];
        foreach ($keys as $item)
            $search[] = '{'.$item.'}';

        $replace = array_keys($params);
        return str_replace($search, $replace, $command);
    }
}
