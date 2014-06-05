<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 05.06.14
 * Time: 14:51
 */

namespace system2;

/**
 * Class TVFactory
 * @package system2
 */
class TVFactory extends AbstractFactory {
    /**
     * @param int $id
     * @return IUser
     */
    public function createUser($id)
    {
        return new TVUser($id);
    }

    /**
     * @param IUser $user
     * @return IDVR
     */
    public function createDvr(IUser $user)
    {
        return new TVDvr($user);
    }

    /**
     * @param IDVR $dvr
     * @param ICamSettings $cs
     * @return ICam
     */
    public function createCam(IDVR $dvr, ICamSettings $cs)
    {
        return new TVCam($dvr, $cs);
    }

    /**
     * @param ICam $cam
     * @return ICamStream
     */
    public function createStream(ICam $cam)
    {
        $stream = new Streams($cam);
        $live = new LiveVlcStream($cam);
        $stream->addStream($live);

        //$this->stream->addStream(new RecVlcStream($this, $live));

        //$this->stream->addStream(new TVReStream($this, $live));

        return $stream;
    }

} 