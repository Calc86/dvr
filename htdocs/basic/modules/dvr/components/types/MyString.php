<?php

namespace app\modules\dvr\components\types;

use app\modules\dvr\components\exceptions\StringException;

class MyString extends Type{
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