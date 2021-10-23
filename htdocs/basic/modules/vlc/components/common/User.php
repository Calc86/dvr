<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 15:41
 */

namespace app\modules\vlc\components\common;

use app\modules\vlc\components\IDVR;
use app\modules\vlc\components\IUser;

/**
 * Class User
 * @package system2
 */
class User implements IUser
{
    protected int $id;

    /**
     * @var array
     */
    protected array $dvrs = [];

    /**
     * @param $id
     */
    function __construct($id)
    {
        $this->id = $id;
        $this->log(__FUNCTION__);

        $this->create();
    }

    /**
     * @return int
     */
    public function getID(): int
    {
        return $this->id;
    }

    final public function create()
    {
        $this->log(__FUNCTION__);

        //todo убрать массив, скомпоновать
        $dvr = AbstractFactory::getInstance()->createDvr($this);
        $this->dvrs[$dvr->getID()] = $dvr;

        //$this->_create();
    }

    //abstract protected function _create();

    public function start()
    {
        $this->log(__FUNCTION__);
        foreach ($this->dvrs as $dvr) {
            /** @var $dvr IDVR */
            $dvr->start();
        }
    }

    public function stop()
    {
        $this->log(__FUNCTION__);
        foreach ($this->dvrs as $dvr) {
            /** @var $dvr IDVR */
            $dvr->stop();
        }
    }

    public function restart()
    {
        $this->log(__FUNCTION__);
        foreach ($this->dvrs as $dvr) {
            /** @var $dvr IDVR */
            $dvr->restart();
        }
    }

    public function update()
    {
        $this->log(__FUNCTION__);
        foreach ($this->dvrs as $dvr) {
            /** @var $dvr IDVR */
            $dvr->update();
        }
    }

    /**
     * @param $dvrID
     * @return DVR|null
     */
    public function getDVR($dvrID): ?DVR
    {
        return $this->dvrs[$dvrID] ?? null;
    }

    /**
     * @param $camID
     * @return null|Cam
     */
    public function getCam($camID): ?Cam
    {
        return $this->getDVR($this->getID())->getCam($camID);
    }

    /**
     * @return array
     */
    public function getDVRs(): array
    {
        return $this->dvrs;
    }

    /**
     * @param $message
     */
    final protected function log($message)
    {
        Log::getInstance($this->id)->put($message, $this);
    }


}
