<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 26.05.14
 * Time: 18:01
 */

namespace system2;

/**
 * Class BBLiveStream
 * @package system2
 */
class BBLiveStream extends LiveVlcStream {

    /**
     * @param string $transcode
     * @return string
     */
    protected function getOutputVlm(string $transcode = 'transcode{acodec=none}:') //no sound
    {
        return parent::getOutputVlm($transcode);
    }

}
