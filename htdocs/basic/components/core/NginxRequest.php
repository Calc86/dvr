<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 11.07.2018
 * Time: 18:45
 */

namespace app\components\core;


use yii\web\Request;

class NginxRequest extends Request
{
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    public function getUserIP()
    {
        /*
         * HTTP_X_REAL_IP	178.209.110.90
         * HTTP_X_FORWARDED_FOR
         */
        $ip = null;
        $ip = isset($_SERVER['HTTP_X_REAL_IP']) ? $_SERVER['HTTP_X_REAL_IP'] : null;
        if($ip == null) $ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : null;
        //var_dump($ip); die();
        return $ip;
    }
}
