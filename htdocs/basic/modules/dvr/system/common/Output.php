<?php

namespace dvr\system\common;

use yii\base\Model;

/**
 * @property-read string $localUri
 */
abstract class Output extends Source
{
    protected string $name;
    protected ?string $video;
    protected ?string $audio;
    protected ?Source $source;

    abstract function getLocalUri(): string;
}
