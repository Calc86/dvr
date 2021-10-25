<?php

namespace app\modules\dvr\components\motion;

use app\modules\dvr\components\common\DaemonConfig;

/**
 *
 */
class Config extends DaemonConfig
{
    public string $motionPath = 'motion';
    public string $host = '0.0.0.0';
    public string $user = 'motion';
    public string $password = 'qwerty';
    public int $httpPort = 33300;
    public string $motionHttpLocalhost = 'off';
    public bool $useLog = true;
    public string $html = 'on';
}