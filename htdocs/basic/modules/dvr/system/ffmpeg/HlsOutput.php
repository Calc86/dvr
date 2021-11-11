<?php

namespace dvr\system\ffmpeg;

use dvr\system\common\Dvr;
use dvr\system\common\Output;
use dvr\system\common\Source;

/**
 *
 */
class HlsOutput extends Output
{
//    const FORMAT_480 = '480';
//    const FORMAT_720 = '720';
//    const FORMAT_1080 = '1080';

    protected FFmpegHls $daemon;

    public function __construct(Dvr $dvr,Source $source, string $size, string $name = 'ffmpeg')
    {
        parent::__construct( $source->name, $source->uri, []);
        $this->daemon = new FFmpegHls($dvr, $name . '_' . $this->name, $source->uri, $size);
        $dvr->addDaemon($this->daemon);
        // todo request path
    }

    function getLocalUri(): string
    {
        // TODO: command output m3u8
    }

    public function stop(): void
    {
        $this->daemon->kill();
    }

    public function start(): void
    {
        $this->daemon->start();
    }

    function delete(): void
    {
    }

    function create(): void
    {
    }

    function check(): void
    {
        // TODO: ps command by pid
    }
}