<?php

namespace dvr\system\common;

use yii\base\Model;

/**
 * Linux execute bin control class
 *
 * @property-read int|null $pid
 */
abstract class Daemon extends Model
{
    protected string $name;
    protected Dvr $dvr;

    public function __construct(Dvr $dvr, string $name)
    {
        parent::__construct([]);
        $this->dvr = $dvr;
        $this->name = $name;
    }

    abstract public function start(): void;
    abstract public function stop(): void;
    abstract public function kill(): void;
    abstract public function restart(): void;
    abstract public function isStarted(): bool;

    abstract public function getPid(): ?int;
}
