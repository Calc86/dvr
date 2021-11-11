<?php

namespace dvr\system\ffmpeg;

use dvr\system\common\BashCommand;
use dvr\system\common\Daemon;
use dvr\system\common\Dvr;

/**
 * run ffmpeg hls and control this
 */
class FFmpegHls extends Daemon
{
    protected BashCommand $start;
    protected BashCommand $stop;

    public function __construct(Dvr $dvr, string $name, string $input, string $size, int $duration = 60)
    {
        parent::__construct($dvr, $name);

        $this->start = HlsCommand::create($input, $size, $duration, $this->dvr->local, $name, $this->dvr->proc);
        $this->stop = new BashCommand('kill ' . $this->pid);
    }

    public function start(): void
    {
        $this->start->execute();
    }

    public function stop(): void
    {
        $this->stop->execute();
    }

    public function kill(): void
    {
        $this->stop();
    }

    public function restart(): void
    {
        $this->stop();
        $this->start();
    }

    public function isStarted(): bool
    {
        // TODO: check ps pid
    }

    public function getPid(): ?int
    {
        return intval(trim(file_get_contents($this->start->pidFile)));
    }
}