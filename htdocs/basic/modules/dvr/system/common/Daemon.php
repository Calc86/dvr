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

    abstract public function start(): void;
    abstract public function stop(): void;
    abstract public function kill(): void;
    abstract public function restart(): void;
    abstract public function isStarted(): bool;

    abstract public function getPid(): ?int;
}
