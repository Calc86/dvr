<?php

namespace app\modules\vlc\components\types;

use app\modules\vlc\components\exceptions\StringException;

class String extends Type{
    /**
     * @return string
     * @throws StringException
     */
    public function get()
    {
        if(!is_string(parent::getValue())) throw new StringException;
        return parent::toString();
    }

    /**
     * @param $v
     * @return void
     * @throws StringException
     */
    public function set($v){
        if(!is_string($v)) throw new StringException;
        parent::setValue($v);
    }

}