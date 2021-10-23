<?php

namespace app\modules\vlc\components\types;

class CamPrefix extends NameType{
    const LIVE = 'live';
    const RECORD = "rec";
    const MOTION = 'mtn';
    const LHTTP = 'lhttp';

    private static $prefixes = array(
        CamPrefix::LIVE,
        CamPrefix::RECORD,
        CamPrefix::MOTION,
        CamPrefix::LHTTP, //stop livehttp
    );

    /**
     * @return array
     */
    public static function getPrefixes()
    {
        return self::$prefixes;
    }
}
