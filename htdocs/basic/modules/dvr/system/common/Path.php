<?php

namespace dvr\system\common;

use Yii;
use yii\base\Model;

/**
 * @property-read string $ramFS
 * @property-read string $local
 * @property-read string $nfs
 * @property-read string $tmp
 * @property-read string $proc
 * @property-read string $log
 */
class Path extends Model implements IPath
{
    protected string $path = '@data';

    public static function path($dir, $file, $ext = null) {
        if(!empty($ext)) $ext = '.' . $ext;
        if(!is_dir($dir)) mkdir($dir, 0777, true);    // todo 0777
        return $dir . DIRECTORY_SEPARATOR . $file . $ext;
    }

    public function init()
    {
        parent::init();

        $this->path = Yii::getAlias($this->path);
    }

    public function getRamFS(): string
    {
        return $this->path . DIRECTORY_SEPARATOR . 'tmpfs';
    }

    public function getLocal(): string
    {
        return $this->path . DIRECTORY_SEPARATOR . 'local';
    }

    public function getNfs(): string
    {
        return $this->path . DIRECTORY_SEPARATOR . 'nfs';
    }

    public function getTmp(): string
    {
        return $this->path . DIRECTORY_SEPARATOR . 'tmp';
    }

    public function getProc(): string
    {
        return $this->path . DIRECTORY_SEPARATOR . 'proc';
    }

    public function getLog(): string
    {
        return $this->path . DIRECTORY_SEPARATOR . 'log';
    }
}
