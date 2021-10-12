<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 19.05.14
 * Time: 15:34
 */

namespace system2;

define(
'VLC_FLV_STREAM_TRANSCODE_STRING',
//'transcode{vcodec=FLV1,vb=4096,fps=25,deinterlace,scale=1,acodec=mp3,samplerate=44100,ab=128}:'
'transcode{vcodec=FLV1,vb=4096,fps=25,scale=1,acodec=mp3,samplerate=44100,ab=128}:'
);

/**
 * ретранслировать live поток в FLV
 * Class FlvVlcReStream
 * @package system2
 */
class FlvVlcReStream extends VlcReStream{
    protected $path = 'stream.flv';

    /**
     * @param ICam $cam
     * @param LiveVlcStream $live
     * @param string $streamName
     */
    function __construct(ICam $cam, LiveVlcStream $live, $streamName = 're_flv')
    {
        parent::__construct($cam, $live, $streamName);
    }

    /**
     * @param string $transcode
     * @return string
     */
    protected function getOutputVlm($transcode = VLC_FLV_STREAM_TRANSCODE_STRING)
    {
        //return parent::getOutputVlm("transcode{vcodec=FLV1,acodec=mp3,vb=200,deinterlace,fps=25,samplerate=44100,ab=32}:");
        //return parent::getOutputVlm("transcode{vcodec=FLV1,acodec=mp3,deinterlace,fps=25,samplerate=44100}:");
        return "#{$transcode}http{dst=*:{$this->getPort()}/{$this->path}}";
    }

    /**
     * @return int
     */
    private function getPort(){
        return VLC_RE_FLV_PORT_START + $this->cam->getID();
    }
}

/**
 * получить Flv поток из любой url, даже из файла
 * Class UrlFlvVlcStream
 * @package system2
 */
class UrlFlvVlcStream extends VlcStream{
    private $url;

    /**
     * @param ICam $cam
     * @param $url
     * @param string $streamName
     */
    function __construct(ICam $cam, $url, $streamName = 'l_flv')
    {
        parent::__construct($cam, $streamName);
        $this->path = 'stream.flv';
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    protected function getInputVlm()
    {
        return $this->url;
    }

    /**
     * @param string $transcode
     * @return string
     */
    protected function getOutputVlm($transcode = VLC_FLV_STREAM_TRANSCODE_STRING)
    {
        //return parent::getOutputVlm("transcode{vcodec=FLV1,acodec=mp3,vb=200,deinterlace,fps=25,samplerate=44100,ab=32}:");
        //return parent::getOutputVlm("transcode{vcodec=FLV1,acodec=mp3,deinterlace,fps=25,samplerate=44100}:");
        return "#{$transcode}http{dst=*:{$this->getPort()}/{$this->path}}";
    }

    /**
     * @return int
     */
    protected function getPort()
    {
        return VLC_L_FLV_PORT_START + $this->cam->getID();
    }

}
