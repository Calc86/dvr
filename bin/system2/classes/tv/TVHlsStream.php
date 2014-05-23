<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 23.05.14
 * Time: 19:58
 */

namespace system2;

/**
 * Class TVHlsStream
 * @package system2
 */
class TVHlsStream extends HLSVlcStream{
    /**
     * @param string $transcode
     * @return string
     */
    protected function getOutputVlm($transcode = '')
    {
        return parent::getOutputVlm('transcode{acodec=mp3}:');
    }

} 