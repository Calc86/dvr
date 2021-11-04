<?php

namespace dvr\system;

use Yii;
use yii\console\Application;

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

    public static function log(string $msg, string $category): void
    {
        if(Yii::$app instanceof Application) {
            $format = "[{date}] {category}: {msg}\n";

            echo self::applyParams([
                'date' => date("Y:m:d H:i:s"),
                'category' => $category,
                'msg' => $msg,
            ], $format);
        } else {
            Yii::debug($msg, $category);
        }
    }
}
