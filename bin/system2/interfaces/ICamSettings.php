<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 18:20
 */

namespace system2;

/**
 * Необходимые настройки камеры для работы в системе
 * Interface ICamSettings
 * @package system2
 */
interface ICamSettings extends IUnique {
    public function getIp();

    public function getLiveProto();
    public function getLivePort();
    public function getLivePath();
    public function getLiveUrl();

    public function getStopProto();
    public function getStopPort();
    public function getStopPath();
    public function getStopUrl();
}
