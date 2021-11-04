<?php

namespace dvr\system\vlc;

use dvr\system\common\NetworkOutput;
use dvr\system\Helpers;

class NetworkVlcOutput extends NetworkOutput
{
    private const VLM_OUT = "#{transcode}std{access=http{mime={mime}},mux=ts{use-key-frames},dst={host}:{port}/{path}}";

    protected string $mime = 'video/mp4';
    protected string $path = 'video.mp4';

    protected string $vlmOut;
    protected string $portOut;

    public function init()
    {
        parent::init();

        $params = [
            'transcode' => '',  // todo
            'mime' => $this->mime,
            'host' => '0.0.0.0',    // todo
            'port' => $this->portOut,
            'path' => $this->path,
        ];
        $this->vlmOut = Helpers::applyParams($params, self::VLM_OUT);
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

    function getLocalUri(): string
    {
        // TODO: Implement getLocalUri() method.
    }

    public function stop(): void
    {
        // TODO: VlmCommand
    }

    public function start(): void
    {
        // TODO: VlmCommand
    }

    function delete(): void
    {
        // TODO: VlmCommand
    }

    function create(): void
    {
        // TODO: VlmCommand
    }

    function check(): void
    {
        // TODO: VlmCommand
    }
}