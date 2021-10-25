<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 15:43
 */

namespace app\modules\dvr\components\common;

use app\modules\dvr\components\exceptions\CommandException;
use app\modules\dvr\components\exceptions\StringException;
use app\modules\dvr\components\interfaces\ICam;
use app\modules\dvr\components\interfaces\IDVR;
use app\modules\dvr\components\interfaces\IUser;
use app\modules\dvr\components\types\BashCommand;

/**
 * Class DVR
 * Общий контроллер цифрового видео рекордера
 *
 * содержит демонов и камеры
 */
class DVR implements IDVR
{
    protected int $id = -1; //-1 for debug
    /**
     * @var IUser
     */
    protected IUser $user;

    /**
     * @var Daemon[]
     */
    private array $daemons = [];

    /**
     * @var ICam[]
     */
    private array $cams = [];

    /**
     * @param IUser $user
     */
    function __construct(IUser $user)
    {
        $this->user = $user;
        $this->id = $user->getID();
    }

    /**
     * @param ICam $cam
     */
    public function addCam(ICam $cam)
    {
        $this->cams[$cam->getID()] = $cam;
    }

    /**
     * @param $camID
     * @return Cam|null
     */
    public function getCam($camID) : ?ICam
    {
        return $this->cams[$camID] ?? null;
    }

    /**
     * @param Daemon $daemon
     */
    public function addDaemon(Daemon $daemon)
    {
        $this->daemons[] = $daemon;
    }

    /**
     * @return int
     */
    public function getID() : int
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getCamIDs(): array
    {
        $ids = array();
        foreach ($this->cams as $cam) {
            /** @var $cam Cam */
            $ids[] = $cam->getID();
        }

        return $ids;
    }

    /**
     * @throws StringException
     * @throws CommandException
     */
    public function start()
    {
        $this->log(__FUNCTION__);

        $this->startDaemons();
        $this->startCams();
    }

    /**
     * @throws StringException
     */
    public function stop()
    {
        $this->log(__FUNCTION__);

        $this->stopCams();
        $this->stopDaemons();
    }

    /**
     * @throws StringException
     * @throws CommandException
     */
    public function restart()
    {
        $this->log(__FUNCTION__);
        /*foreach($this->cams as $cam){
            /** @var $cam ICam*/
        /*$cam->stop();
        sleep(1);
        $cam->start();
    }*/

        $this->stopCams();
        $this->stopDaemons();
        sleep(1);
        $this->startDaemons();
        $this->startCams();
    }

    /**
     * @throws StringException
     */
    public function update()
    {
        $this->log(__FUNCTION__);

        foreach ($this->cams as $cam) {
            $cam->update();
        }

        //вставить в лог дату и время
        foreach ($this->daemons as $d) {
            $date = new BashCommand("echo `date` >> {$d->getLogFile()}");
            $date->exec();
        }
    }

    /**
     * @param $message
     */
    public function log($message)
    {
        Log::getInstance($this->id)->put($message, $this);
    }

    //----------------

    private function startCams()
    {
        $this->log(__FUNCTION__);
        foreach ($this->cams as $cam) {
            $cam->create();
            $cam->start();
        }
    }

    /**
     * @throws CommandException
     * @throws StringException
     */
    private function startDaemons()
    {
        $this->log(__FUNCTION__);

        foreach ($this->daemons as $daemon) {
            $daemon->start();
        }
    }

    /**
     * @throws StringException
     */
    private function stopDaemons()
    {
        $this->log(__FUNCTION__);
        foreach ($this->daemons as $daemon) {
            $daemon->stop();
        }
    }

    private function stopCams()
    {
        $this->log(__FUNCTION__);

        foreach ($this->cams as $cam) {
            $cam->stop();
            $cam->delete();
        }
    }

    /**
     * @return IUser
     */
    public function getUser() : IUser
    {
        return $this->user;
    }
}
