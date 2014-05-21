<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 19.05.14
 * Time: 9:23
 */

namespace system2;

/**
 * Class TVSystem
 * @package system2
 */
class TVSystem extends System {
    public function create()
    {
        $this->users[] = new TVUser(1);

        parent::create();
    }

    protected function _update()
    {
        parent::_update();

        // удалить всё старше одного дня
        $path = Path::getNfsPath(Path::RECORD);

        $delete = new \BashCommand('find '.$path.'/* -mtime +1 -exec rm {} \ ;');
        Log::getInstance()->put($delete, __CLASS__);
        $delete->exec();
    }
}
