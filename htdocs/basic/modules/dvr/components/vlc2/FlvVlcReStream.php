<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 19.05.14
 * Time: 15:34
 */

namespace app\modules\dvr\components\vlc2;

use app\modules\dvr\components\interfaces\ICam;

/**
 * Ретранслировать live поток в FLV
 * Class FlvVlcReStream
 * @package system2
 */
class FlvVlcReStream extends VlcReStream
{
    const TRANSCODE = 'transcode{vcodec=FLV1,vb=4096,fps=25,scale=1,acodec=mp3,samplerate=44100,ab=128}:';

    protected string $path = 'stream.flv';

    /**
     * @param ICam $cam
     * @param LiveVlcStream $live
     * @param string $streamName
     */
    function __construct(ICam $cam, LiveVlcStream $live, $streamName = 're_flv')
    {
        parent::__construct($cam, $live, $streamName);
    }

    protected function getOutputVlm(string $transcode = self::TRANSCODE): string
    {
        //return parent::getOutputVlm("transcode{vcodec=FLV1,acodec=mp3,vb=200,deinterlace,fps=25,samplerate=44100,ab=32}:");
        //return parent::getOutputVlm("transcode{vcodec=FLV1,acodec=mp3,deinterlace,fps=25,samplerate=44100}:");
        return "#{$transcode}http{dst=*:$this->getPort()/$this->path}";
    }

    private function getPort(): int
    {
        return VLC_RE_FLV_PORT_START + $this->cam->getID();
    }
}

