<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 19.05.14
 * Time: 9:23
 */

namespace system2;

use app\modules\dvr\components\common\Log;
use app\modules\dvr\components\common\Path;
use app\modules\dvr\components\common\System;
use app\modules\dvr\components\exceptions\CommandException;
use app\modules\dvr\components\exceptions\StringException;
use app\modules\dvr\components\types\BashCommand;

/**
 * Class TVSystem
 * @package system2
 */
class TVSystem extends System {
    /**
     * @throws CommandException
     * @throws StringException
     */
    protected function _update()
    {
        parent::_update();

        // удалить всё старше одного дня
        $path = $this->config->getNfsPath($this->config->record);

        $delete = new BashCommand('find '.$path.'/* -mtime +1 -exec rm {} \ ;');
        Log::getInstance()->put($delete, __CLASS__);
        $delete->exec();
    }
}
