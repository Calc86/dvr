<?php

namespace dvr\system\common;

use yii\base\Model;

/**
 * @property-read mixed $auth
 */
class Auth extends Model
{
    public ?string $username = null;
    public ?string $password = null;

    /**
     * @return mixed
     */
    function getAuth() {
        return $this;
    }
}
