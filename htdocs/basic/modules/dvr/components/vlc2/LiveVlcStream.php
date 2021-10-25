<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 17:49
 */

namespace app\modules\dvr\components\vlc2;

use app\modules\dvr\components\Helpers;
use app\modules\dvr\components\interfaces\ICam;

/**
 * HTTP vlc stream
 */
class LiveVlcStream extends VlcStream
{
    protected string $mime = 'video/mp4';
    protected string $path = 'path.mp4';

    function __construct(ICam $cam, string $streamName = 'live')
    {
        parent::__construct($cam, $streamName);
    }

    /**
     * @return mixed
     */
    protected function getInputVlm()
    {
        return $this->cam->getSettings()->getLiveUrl();
    }

    /**
     * @param string $transcode https://wiki.videolan.org/Documentation:Streaming_HowTo/Advanced_Streaming_Using_the_Command_Line/#transcode
     * @return string
     */
    protected function getOutputVlm(string $transcode = ''): string
    {
        //$transcode = "transcode{width=320,height=240,fps=25,vcodec=h264,vb=256,venc=x264{aud,profile=baseline,level=30,keyint=30,ref=1},acodec=mp3,ab=96}:";
        //$transcode = "transcode{width=320,height=240,fps=25,vcodec=h264,vb=256,venc=x264{aud,profile=baseline,level=30,keyint=30,ref=1},acodec=mp3,ab=96}:";

        return "#{$transcode}std{access=http{mime=$this->mime},mux=ts{use-key-frames},dst=*:$this->getPort()/$this->path}";
    }

    /**
     * @return int
     */
    protected function getPort(): int
    {
        return VLC_STREAM_PORT_START + $this->cam->getID();
    }

    /**
     * @param string $ip
     * @return string
     */
    public function getOutUrl(string $ip = 'localhost'): string
    {
        $params = [
            'scheme' => 'http',
            'host' => $ip,
            'port' => $this->getPort(),
            'path' => $this->path,
        ];
        return Helpers::applyParams($params, Helpers::URL);
//        return "http://$ip:$this->getPort()/$this->path";
    }

    public function update()
    {
        parent::update();
        $this->start();
    }

    public function setPath(string $path)
    {
        $this->path = $path;
    }

    public function setMime(string $mime)
    {
        $this->mime = $mime;
    }
}
