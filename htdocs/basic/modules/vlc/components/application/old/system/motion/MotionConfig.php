<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 07.04.14
 * Time: 20:13
 */

namespace system; 

/**
 * Class MotionConfig
 * @package system
 * @deprecated
 */
class MotionConfig {

    /**
     * @param String $config текстовый конфиг из темплейта
     * @param array $params какие значения поставить key(motion)=>value
     * @return string
     */
    public static function parseConfig($config, array $params = array()){
        /**
         * Array
        (
        [0] => Array
        (
        [0] => {log_level:6}
        [1] => log_level
        [2] => 6
        )
         */
        $pattern = "/[{]([a-z_]*)[:]?([a-zA-Z0-9_\-\%\/]*)[}]/";
        $matches = array();
        preg_match_all($pattern, $config, $matches, PREG_SET_ORDER);
        //подготовим масив с дефолными значениями
        $settings = array();
        foreach($matches as $match){
            $settings['search'][] = $match[0];
            $settings['replace'][] = isset($params[$match[1]]) ? $params[$match[1]] : $match[2];
        }

        return str_replace($settings['search'], $settings['replace'], $config);
    }
}
