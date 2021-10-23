<?php

namespace app\modules\dvr\components\types;

use app\modules\dvr\components\exceptions\NullIDException;

class IDType extends Integer{
    public function get()
    {
        if($this->getValue() <= 0) throw new NullIDException($this->getValue());
        return parent::get();
    }

    public function set($v)
    {
        if($v <=0)  throw new NullIDException($this->getValue());
        parent::set($v);
    }
}