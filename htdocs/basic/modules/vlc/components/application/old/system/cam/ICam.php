<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 16:59
 */

namespace system;

use app\modules\vlc\types\CamID;
use app\modules\vlc\types\CamPrefix;

/**
 * Interface ICam
 * @package system
 */
interface ICam {
    /**
     * Создать запись в сторонней программе
     * @return void
     */
    public function create();

    /**
     * Удалить запись из сторонней программы
     * @return void
     */
    public function delete();

    /**
     * Создать и запустить стримы
     * @return void
     */
    public function start();
    public function stop();
    public function update();

    /**
     * @param CamPrefix $camPrefix
     * @return ICamStream
     */
    public function getStream(CamPrefix $camPrefix): ICamStream;

    /**
     * @return CamID
     */
    public function getID(): CamID;
}
