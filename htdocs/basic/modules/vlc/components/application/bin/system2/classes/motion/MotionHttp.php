<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 21.04.14
 * Time: 11:50
 */

namespace system2;

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

/**
 * Class MotionHttpCmd
 * @package system
 * Список команд
 * http://www.lavrsen.dk/foswiki/bin/view/Motion/MotionHttpAPI
 */
class MotionHttpConfigCmd
{
    const COMMAND = "config";

    const LIST_ = "list";
    const WRITE = "write";
    const WRITE_YES = "writeyes";
    const SET = "set";
    const GET = "get";

    const P_WIDTH = "width";
    const P_HEIGHT = "height";
    const P_FRAMERATE = "framerate";
    const P_NETCAM_URL = "netcam_url";
    const P_NETCAM_USERPASS = "netcam_userpass";
    const P_BRIGHTNESS = "brightness";
    const P_CONTRAST = "contrast";
    const P_SATURATION = "saturation";
    const P_HUE = "hue";
    const P_THRESHOLD = "threshold";
    const P_NOISE_LEVEL = "noise_level";
    const P_NOISE_TUNE = "noise_tune";
    const P_AREA_DETECT = "area_detect";
    const P_MASK_FILE = "mask_file";
    const P_STREAM_PORT = "stream_port";
    const P_STREAM_LOCALHOST = "stream_localhost";
}

/**
 * Class MotionHttpActionCmd
 * @package system
 * http://www.lavrsen.dk/foswiki/bin/view/Motion/MotionHttpAPI#Action_Commands
 */
class MotionHttpActionCmd
{
    const COMMAND = "action";
    const MAKE_MOVIE = "makemovie";
    const SNAPSHOT = "snapshot";
    const RESTART = "restart";
    const QUIT = "quit";
}

/**
 * Class MotionHttpDetectionCmd
 * @package system
 * http://www.lavrsen.dk/foswiki/bin/view/Motion/MotionHttpAPI#Detection_Commands
 */
class MotionHttpDetectionCmd
{
    const COMMAND = "detection";
    const STATUS = "status";
    const START = "start";
    const STOP = "stop";
    const CONNECTION = "connection";
}
