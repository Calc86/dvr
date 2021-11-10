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

    public static function applyParams(array $params, string $command): string
    {
        $keys = array_keys($params);
        $search = [];
        foreach ($keys as $item)
            $search[] = '{' . $item . '}';

        $replace = array_values($params);
        return str_replace($search, $replace, $command);
    }

    public static function log(string $msg, string $category): void
    {
        if (Yii::$app instanceof Application) {
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

    /**
     * @param int $port
     * @param string $host
     * @return bool
     */
    public static function checkPort(int $port, string $host = '0.0.0.0'): bool
    {
        $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        socket_set_option($socket, SOL_SOCKET, SO_RCVTIMEO, ['sec' => 1, 'usec' => 0]);
        //socket_set_timeout($socket, 1);
        $result = @socket_connect($socket, $host, $port);
        if ($result !== false) {
            socket_close($socket);
            return true;
        }
        return false;
    }

    public static function mkDir(string $path): void
    {
        $pp = explode("/", $path);
        $part = DIRECTORY_SEPARATOR;
        foreach ($pp as $p) {
            if (empty($p)) continue;
            $part .= DIRECTORY_SEPARATOR . $p;
            //var_dump($path);
            if (!empty(realpath($part))) continue;
            if (is_dir($part)) continue;
            mkdir($part);
        }
    }
}
