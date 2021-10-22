<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 14:33
 */

namespace app\modules\vlc\components;

/**
 * Интерфейс для Digital Video Recorder
 * Interface IDVR
 * @package system2
 */
interface IDVR extends IControlled, IUnique{
    /**
     * @return IUser
     */
    public function getUser(): IUser;

    /**
     * @param $camID
     * @return ICam
     */
    public function getCam($camID): ICam;
} 