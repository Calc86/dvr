<?php

namespace dvr\system\common;

/**
 * @property-read string $localUri
 */
abstract class Output extends Source
{
    public string $name;
    protected ?string $video;
    protected ?string $audio;
    protected ?Source $source;
    protected bool $hasInput = false;

    abstract function getLocalUri(): string;
}
