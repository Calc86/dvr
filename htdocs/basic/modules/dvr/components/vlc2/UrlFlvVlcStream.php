<?php

namespace app\modules\dvr\components\vlc2;

use app\modules\dvr\components\interfaces\ICam;

/**
 * Получить Flv поток из любой url, даже из файла
 */
class UrlFlvVlcStream extends VlcStream
{
    private string $url;
    private string $path;

    function __construct(ICam $cam, string $url, string $streamName = 'l_flv')
    {
        parent::__construct($cam, $streamName);
        $this->path = 'stream.flv';
        $this->url = $url;
    }

    /**
     * @return string
     */
    protected function getInputVlm(): string
    {
        return $this->url;
    }

    /**
     * @param string $transcode
     * @return string
     */
    protected function getOutputVlm(string $transcode = FlvVlcReStream::TRANSCODE): string
    {
        //return parent::getOutputVlm("transcode{vcodec=FLV1,acodec=mp3,vb=200,deinterlace,fps=25,samplerate=44100,ab=32}:");
        //return parent::getOutputVlm("transcode{vcodec=FLV1,acodec=mp3,deinterlace,fps=25,samplerate=44100}:");
        return "#{$transcode}http{dst=*:$this->getPort()/$this->path}";
    }

    /**
     * @return int
     */
    protected function getPort(): int
    {
        return VLC_L_FLV_PORT_START + $this->cam->getID();  // todo 20211025 change to Config
    }
}