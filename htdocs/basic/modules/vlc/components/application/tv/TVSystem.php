<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 19.05.14
 * Time: 9:23
 */

namespace system2;

use app\modules\vlc\components\common\Log;
use app\modules\vlc\components\common\Path;
use app\modules\vlc\components\common\System;
use app\modules\vlc\types\BashCommand;

/**
 * Class TVSystem
 * @package system2
 */
class TVSystem extends System {
    protected function _update()
    {
        parent::_update();

        // удалить всё старше одного дня
        $path = Path::getNfsPath(Path::RECORD);

        $delete = new BashCommand('find '.$path.'/* -mtime +1 -exec rm {} \ ;');
        Log::getInstance()->put($delete, __CLASS__);
        $delete->exec();
    }
}
