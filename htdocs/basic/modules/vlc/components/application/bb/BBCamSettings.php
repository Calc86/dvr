<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 15.05.14
 * Time: 0:50
 */

namespace system2;

use app\modules\vlc\components\common\CamSettings;

/**
 * Содержит необходимые поля, которые заполняются из mysql
 * Class BBCamSettings
 * @package system2
 */
class BBCamSettings extends CamSettings {
    public $live;
    public $rec;
    public $mtn;
}
