<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 21.04.14
 * Time: 11:50
 */

namespace app\modules\vlc\components\motion;

/**
 * Class MotionHttp
 * @package system2
 */
class MotionHttp
{
    const HOST = MOTION_HTTP_HOST;
    const PORT = MOTION_HTTP_PORT;
    const USER = MOTION_HTTP_USER;
    const PASS = MOTION_HTTP_PASS;

    /**
     * @param int $thread
     * @param string $command
     * @param string $subCommand
     * @param $param
     * @param string $value
     * @return string
     */
    protected function createUrl(int $thread = 0, string $command = MotionHttpConfigCmd::COMMAND, string $subCommand = MotionHttpConfigCmd::LIST_, $param = null, string $value = ""): string
    {
        $httpUrl = "http://{MotionHttp::HOST}:{MotionHttp::PORT}";
        if ($thread == null) return $httpUrl;

        $threadUrl = "/$thread";
        if ($command == null) return $httpUrl . $threadUrl;

        $commandUrl = "/$command";
        if ($subCommand == null) return $httpUrl . $threadUrl . $commandUrl;

        $subCommandUrl = "/$subCommand";
        if ($param == null) return $httpUrl . $threadUrl . $commandUrl . $subCommandUrl;

        $value = urlencode($value);
        $paramUrl = "?$param=$value";
        return $httpUrl . $threadUrl . $commandUrl . $subCommandUrl . $paramUrl;
    }

    /**
     * @param int $thread
     * @param string $command
     * @param string $subCommand
     * @param null $param
     * @param string $value
     * @return string
     */
    public function command(int $thread = 0, string $command = MotionHttpConfigCmd::COMMAND, string $subCommand = MotionHttpConfigCmd::LIST_, $param = null, string $value = ""): string
    {
        $context = stream_context_create(array(
            'http' => array(
                'header' => "Authorization: Basic " . base64_encode(MotionHttp::USER . ":" . MotionHttp::PASS)
            )
        ));
        return file_get_contents($this->createUrl($thread, $command, $subCommand, $param, $value), false, $context);
    }


}



