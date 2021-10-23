<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 17.04.14
 * Time: 13:58
 */

namespace app\modules\vlc\components;

use app\modules\vlc\components\common\Log;

/**
 * Class EchoLog
 * @package system2
 */
class EchoLog extends Log {
    /**
     * @param $string
     * @param string $module
     * @param string $target
     * @return string
     */
    public function put($string, $module, string $target = "NOTICE"): string
    {
        $data = parent::put($string, $module, $target);
        echo $data;
        return $data;
    }
}
