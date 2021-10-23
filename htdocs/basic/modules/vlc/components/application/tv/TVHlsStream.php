<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 23.05.14
 * Time: 19:58
 */

namespace system2;

use app\modules\vlc\components\vlc2\HLSVlcStream;

/**
 * Class TVHlsStream
 * @package system2
 */
class TVHlsStream extends HLSVlcStream{
    /**
     * @param string $transcode
     * @return string
     */
    protected function getOutputVlm(string $transcode = 'transcode{acodec=mp3}:'): string
    {
        return parent::getOutputVlm($transcode);
    }

}
