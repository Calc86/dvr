<?php

namespace dvr\system\common;

use app\modules\dvr\components\vlc2\Config;
use Yii;
use yii\base\Model;

class SystemConfig extends Model
{
    public static SystemConfig $app;

    public int $dvrPorts = 8100;    // todo

    public string $dataPath = '@data';

    /**
     * @var Config[]
     */
    public array $configs;

    public function init()
    {
        parent::init();

        static::$app = $this;

        $this->dataPath = Yii::getAlias($this->dataPath);
    }
}
