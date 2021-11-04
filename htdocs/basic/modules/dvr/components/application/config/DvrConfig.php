<?php

namespace app\modules\dvr\components\application\config;

/**
 * local -> middleware -> external
 */
class DvrConfig
{
    public Config $local;
    public Config $middleware;
    public ?Config $external;
}
