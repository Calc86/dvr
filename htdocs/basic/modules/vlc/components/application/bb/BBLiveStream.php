<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 26.05.14
 * Time: 18:01
 */

namespace system2;

use app\modules\vlc\components\vlc2\LiveVlcStream;

/**
 * Class BBLiveStream
 * @package system2
 */
class BBLiveStream extends LiveVlcStream {

    /**
     * @param string $transcode
     * @return string
     */
    protected function getOutputVlm(string $transcode = 'transcode{acodec=none}:'): string
    {
        return parent::getOutputVlm($transcode);
    }

}
