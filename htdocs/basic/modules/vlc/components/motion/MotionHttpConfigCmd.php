<?php

namespace app\modules\vlc\components\motion;

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
