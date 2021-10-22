<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 18:20
 */

namespace app\modules\vlc\components;

/**
 * Необходимые настройки камеры для работы в системе
 * Interface ICamSettings
 * @package system2
 */
interface ICamSettings extends IUnique {
    /**
     * @return mixed
     */
    public function getIp();

    /**
     * @return mixed
     */
    public function getLiveProto();

    /**
     * @return mixed
     */
    public function getLivePort();

    /**
     * @return mixed
     */
    public function getLivePath();

    /**
     * @return mixed
     */
    public function getLiveUrl();

    /**
     * @return mixed
     */
    public function getStopProto();

    /**
     * @return mixed
     */
    public function getStopPort();

    /**
     * @return mixed
     */
    public function getStopPath();

    /**
     * @return mixed
     */
    public function getStopUrl();
}
