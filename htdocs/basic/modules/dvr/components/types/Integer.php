<?php

namespace app\modules\dvr\components\types;

use app\modules\dvr\components\exceptions\IntegerException;

/**
 *
 */
class Integer extends Type{
    /**
     * @param mixed $value
     */
    public function __construct($value)
    {
        parent::__construct((int)$value);
    }

    /**
     * @return int
     * @throws IntegerException
     */
    public function get(){
        if(!is_int(parent::getValue())) throw new IntegerException;
        return parent::toInt();
    }

    /**
     * @param $v
     * @return void
     * @throws IntegerException
     */
    public function set($v){
        if(!is_integer($v)) throw new IntegerException;
        parent::setValue($v);
    }


}