<?php

namespace dvr\system\common;

use kartik\base\Config;
use yii\base\Model;

/**
 * @property-read string $ramFS
 * @property-read string $local
 * @property-read string $nfs
 * @property-read string $tmp
 * @property-read string $proc
 * @property-read string $log
 */
class System extends Model implements IPath
{
    protected Path $path;
    protected string $name;
    /**
     * @var Dvr[]
     */
    protected array $dvr = [];

    public function __construct($name = 'default', ?Path $path = null)
    {
        $this->path = $path ?? new Path();
        $this->name = $name;
    }

    public function getRamFS(): string
    {
        return $this->path->ramFS . DIRECTORY_SEPARATOR . $this->name;
    }

    public function getLocal(): string
    {
        return $this->path->local . DIRECTORY_SEPARATOR . $this->name;
    }

    public function getNfs(): string
    {
        return $this->path->nfs . DIRECTORY_SEPARATOR . $this->name;
    }

    public function getTmp(): string
    {
        return $this->path->tmp . DIRECTORY_SEPARATOR . $this->name;
    }

    public function getProc(): string
    {
        return $this->path->proc . DIRECTORY_SEPARATOR . $this->name;
    }

    public function getLog(): string
    {
        return $this->path->log . DIRECTORY_SEPARATOR . $this->name;
    }

    public function createDvr(): void
    {

    }

    public function start()
    {
        foreach ($this->dvr as $dvr) {
            $dvr->start();
        }
    }

    public function stop()
    {
        foreach ($this->dvr as $dvr) {
            $dvr->stop();
        }
    }

    public function status()
    {
        foreach ($this->dvr as $dvr) {
            $dvr->status();
        }
    }

    public function addDvr(Dvr $dvr, ?Config $config = null)
    {
        $this->dvr[] = $dvr;
    }
}
