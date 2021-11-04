<?php

namespace dvr\system\common;

use yii\base\Model;

/**
 *
 */
abstract class Command extends Model
{
    abstract public function execute(): void;

    public function result(): bool
    {
        return true;
    }

    /**
     * @return mixed|null
     */
    public function data()
    {
        return null;
    }
}
