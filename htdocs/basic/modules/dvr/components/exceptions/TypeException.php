<?php

namespace app\modules\dvr\components\exceptions;

/**
 *
 */
class TypeException extends BBException{
    /**
     *
     */
    public function __construct()
    {
        parent::__construct("wrong type");
    }
}