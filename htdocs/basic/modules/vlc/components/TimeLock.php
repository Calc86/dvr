<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 20.05.14
 * Time: 15:23
 */

namespace app\modules\vlc\components;

use app\modules\vlc\components\common\Lock;
use app\modules\vlc\components\common\Log;

/**
 * Нужно использовать create, если создается, то время прошло
 * Class TimeLock
 * @package system2
 */
class TimeLock extends Lock {

    private int $time;

    /**
     * @param string $fName
     * @param int $time in seconds
     */
    function __construct(string $fName, int $time = 600)
    {
        $this->time = $time;
        parent::__construct('time_'.$fName);


        if(file_exists($this->getPath())){
            $sub = time() - filectime($this->getPath());
            if( $sub > $time ){
                $this->delete();
            }
            else{
                Log::getInstance()->put(($time - $sub),"TimeLock");
            }
        }
    }
}
