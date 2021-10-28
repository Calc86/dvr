<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 19:03
 */

namespace app\modules\dvr\components\vlc2;

use app\modules\dvr\components\interfaces\ICam;

/**
 * Http live-streaming from vlc
 *
 * @property Config $config
 */
class HLSVlcStream extends VlcReStream
{
    /**
     * @param ICam $cam
     * @param LiveVlcStream $live
     */
    function __construct(ICam $cam, LiveVlcStream $live)
    {
        parent::__construct($cam, $live, 'lhttp');
    }

    /**
     * @param string $transcode строка transcode{...}:
     * @return string
     */
    protected function getOutputVlm(string $transcode = ''): string
    {
        //$liveHost = LIVEHOST;
        $liveHost = $this->config->nginxHost;
        $camID = $this->cam->getID();
        $dvrID = $this->cam->getDVR()->getID();
        $path = $this->getPath();
        //$transcode = 'transcode{vcodec=FLV1,vb=4096,fps=25,scale=1,acodec=mp3,samplerate=44100,ab=128}:';
        $scheme = 'http';   // todo 20211025
        // todo 20211027 port settings
        //index-url=$scheme://$liveHost:81/lhttp/$dvrID/stream-$camID-########.ts},mux=ts{use-key-frames},dst=$path/stream-$camID-########.ts
        $fileNameTemplate = "stream-$camID-########.ts";
        $lHttpExternalPort = $this->config->livePort;
        $indexUrl = "$scheme://$liveHost:$lHttpExternalPort/lhttp/$dvrID/$fileNameTemplate";
        return "#{$transcode}std{access=livehttp{seglen=5,delsegs=true,numsegs=15,splitanywhere=true,index=$path/stream-$camID.m3u8,index-url=$indexUrl},mux=ts{use-key-frames},dst=$path/$fileNameTemplate}";
        //$transcode = 'transcode{acodec=mp3}:';
        //return "#{$transcode}std{access=livehttp{seglen=5,delsegs=true,numsegs=15,index=$path/stream-{$camID}.m3u8,index-url=http://$liveHost/lhttp/{$dvrID}/stream-{$camID}-########.ts},mux=ts{use-key-frames},dst=$path/stream-$camID-########.ts}";
    }

    /**
     * @return string
     */
    protected function getPath(): string
    {
        return $this->config->getTmpfsPath($this->config->liveHttp
            . DIRECTORY_SEPARATOR . $this->cam->getDVR()->getUser()->getID());
    }

    public function _start()
    {
        sleep(5);   // todo 20211027 do more smart
        $this->vlm->_control('play');
    }

    public function stop()
    {
        parent::stop();

        $command = "rm -rf {$this->getPath()}/stream-{$this->cam->getID()}";
        $this->log($command);
    }
}
