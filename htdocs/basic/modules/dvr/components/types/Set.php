<?php

namespace app\modules\dvr\components\types;

use app\modules\dvr\components\exceptions\SetException;

/**
 *
 */
class Set extends Type{
    /**
     * @return array
     * @throws SetException
     */
    public function get(): array
    {
        if(!is_array(parent::getValue())) throw new SetException;
        return parent::getValue();
    }

    /**
     * @param array $v
     * @return void
     * @throws SetException
     */
    public function set($v)
    {
        if(!is_array($v)) throw new SetException;
        parent::setValue($v);
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        $ret = '';
        foreach(parent::getValue() as $k=>$v)
            $ret.= $k.":".$v.";";
        return $ret;
    }


}
