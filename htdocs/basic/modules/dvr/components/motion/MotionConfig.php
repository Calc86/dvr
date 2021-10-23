<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 07.04.14
 * Time: 20:13
 */

namespace app\modules\dvr\components\motion;

/**
 * Class MotionConfig
 * @package system2
 */
class MotionConfig
{

    /**
     * @param String $config Текстовый конфиг from template
     * @param array $params Какие значения поставить key(motion)=>value
     * @return string
     */
    public static function parseConfig(String $config, array $params = []): string
    {
        /**
         * Array
         * (
         * [0] => Array
         * (
         * [0] => {log_level:6}
         * [1] => log_level
         * [2] => 6
         * )
         */
        $pattern = "/[{]([a-z_]*)[:]?([a-zA-Z0-9_\-%\/]*)[}]/";
        $matches = array();
        preg_match_all($pattern, $config, $matches, PREG_SET_ORDER);
        //подготовим массив с default значениями
        $settings = array();
        foreach ($matches as $match) {
            $settings['search'][] = $match[0];
            $settings['replace'][] = $params[$match[1]] ?? $match[2];
        }

        return str_replace($settings['search'], $settings['replace'], $config);
    }
}
