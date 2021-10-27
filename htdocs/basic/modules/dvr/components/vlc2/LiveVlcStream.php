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
 *
 * todo 20211027 check
 * del all
new bg broadcast loop enabled
setup bg option audio-language=ru
setup bg option keep-all
setup bg input "http://127.0.0.127"
setup bg output #standard{access=http,mux=ts,dst=0.0.0.0:8181}
control bg play

 */
class LiveVlcStream extends VlcStream
{
    protected string $mime = 'video/mp4';
    protected string $path = 'path.mp4';

    function __construct(ICam $cam, string $streamName = 'live')
    {
        parent::__construct($cam, $streamName);
        $this->path = 'cam_'.$cam->getID();
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

        return "#{$transcode}std{access=http{mime=$this->mime},mux=ts{use-key-frames},dst=*:{$this->getPort()}/$this->path}";
    }

    /**
     * @return int|mixed
     */
    protected function getPort() {
        return $this->config->streamPort + $this->cam->getID();
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

//    public function setPath(string $path)
//    {
//        $this->path = $path;
//    }

    public function setMime(string $mime)
    {
        $this->mime = $mime;
    }
}
