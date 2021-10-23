<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 14:33
 */

namespace app\modules\dvr\components\interfaces;

/**
 * Интерфейс для Digital Video Recorder
 * Interface IDVR
 * Цифровой видео рекордер привязан к пользователю и содержит в себе несколько камер
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
    public function getCam($camID): ?ICam;
} 