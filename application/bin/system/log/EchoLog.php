<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 17.04.14
 * Time: 13:58
 */

namespace system;

/**
 * Class EchoLog
 * @package system
 */
class EchoLog extends Log {
    /**
     * @param $string
     * @param string $module
     * @param string $target
     * @return string
     */
    public function put($string, $module = "log", $target = "NOTICE")
    {
        $data = parent::put($string, $module, $target);
        echo $data;
        return $data;
    }
}
