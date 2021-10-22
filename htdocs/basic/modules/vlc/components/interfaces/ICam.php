<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 14:33
 */

namespace system2;

/**
 * Interface ICam
 * @package system2
 */
interface ICam extends IControlled, ICreate, IDelete, IUnique{
    /**
     * @return IDVR
     */
    public function getDVR(): IDVR;

    /**
     * @return ICamSettings
     */
    public function getSettings(): ICamSettings;

    /**
     * Установить настройки камеры
     * @param ICamSettings $cs
     * @return void
     */
    public function setSettings(ICamSettings $cs);
}
