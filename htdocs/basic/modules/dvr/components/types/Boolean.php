<?php

namespace app\modules\dvr\components\types;

use app\modules\dvr\components\exceptions\BooleanException;

class Boolean extends Type{
    /**
     * @return bool
     * @throws BooleanException
     */
    public function get()
    {
        if(!is_bool(parent::getValue())) throw new BooleanException;
        return parent::toBoolean();
    }

    /**
     * @param $v
     * @return void
     * @throws BooleanException
     */
    public function set($v)
    {
        if(!is_bool(($v))) throw new BooleanException;
        parent::setValue($v);
    }

    /**
     * @return string
     */
    public function toString()
    {
        /*
         * if("true") = 1
         * if("false") = 1
         * if("0") = 0
         * if("1") = 1
         */
        if(parent::getValue())
            return "1";
        else
            return "0";
    }
}
