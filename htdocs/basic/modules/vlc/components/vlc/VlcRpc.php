<?php

namespace app\modules\vlc\components\vlc;

use app\modules\vlc\components\exceptions\MysqlQueryException;
use app\modules\vlc\components\exceptions\PathException;
use app\modules\vlc\components\types\CamID;
use app\modules\vlc\components\types\CamPrefix;
use app\modules\vlc\components\types\UserID;
use app\modules\vlc\components\types\YesNo;

/**
 * Class обертка для класса vlc, так как rpc почему-то вызывается не с прямыми параметрами, а в виде массива
 */
class VlcRpc
{
    /**
     * @var Vlc vlc
     */
    protected Vlc $vlc;
    /**
     * @var int
     */
    protected int $uid;

    /**
     * @param int $uid
     * @throws MysqlQueryException
     * @throws PathException
     */
    public function __construct(int $uid)
    {
        $this->uid = (int)$uid;
        $this->vlc = new Vlc(new UserID($uid), new YesNo(true));
    }

    /**
     * @return string
     * @throws MysqlQueryException
     * @throws PathException
     */
    public function start(): string
    {
        ob_start();
        $this->vlc->start();
        $ret = ob_get_contents();
        ob_end_clean();
        return rawurlencode($ret);
    }

    /**
     * @return string
     */
    public function stop(): string
    {
        ob_start();
        $this->vlc->stop();
        $ret = ob_get_contents();
        ob_end_clean();
        return rawurlencode($ret);
    }

    /**
     * @return string
     */
    public function restart(): string
    {
        ob_start();
        $this->vlc->restart();
        $ret = ob_get_contents();
        ob_end_clean();
        return rawurlencode($ret);
    }

    /**
     * @return string
     */
    public function status(): string
    {
        ob_start();
        $this->vlc->status();
        $ret = ob_get_contents();
        ob_end_clean();
        return rawurlencode($ret);
    }

    /**
     * @param int $cid
     * @param string $pref
     * @return int
     * @throws MysqlQueryException
     * @throws PathException
     */
    public function cam_play(int $cid, string $pref): int
    {
        if (!$this->vlc->is_run()) {//запущен ли vlc?
            //try to start
            ob_start();
            $this->vlc->start();
            ob_end_clean();
            sleep(1);
        }

        //todo: Если не запустился - лепим какую нибудь ошибку и разбираемся дальше

        $vlm = new CamControlArchive(new UserID($this->uid), new CamID($cid), new CamPrefix($pref));
        $vlm->play();

        return 1;
    }

    /**
     * Почему-то параметры передаются в массиве....
     *
     * @param $cid
     * @param $pref
     * @return int
     * @throws MysqlQueryException
     */
    public function cam_stop($cid, $pref): int
    {
        if (!$this->vlc->is_run()) return 0; //запущен ли vlc?

        $vlm = new CamControlArchive(new UserID($this->uid), new CamID($cid), new CamPrefix($pref));
        $vlm->stop();
        return 1;
    }

    /*
     * управление камерами
     */
    /**
     * @param $cid
     * @param $pref
     */
    public function create_cam($cid, $pref)
    {
        $this->vlc->create_cam(new CamID($cid), new CamPrefix($pref), new YesNo(false));
    }

    /**
     * @param $cid
     * @param $pref
     */
    public function delete_cam($cid, $pref)
    {
        $this->vlc->delete_cam(new CamID($cid), new CamPrefix($pref), new YesNo(false));
    }

    /**
     * @param $cid
     * @param $pref
     * @throws MysqlQueryException
     */
    public function play_cam($cid, $pref)
    {
        $this->vlc->play_cam(new CamID($cid), new CamPrefix($pref), new YesNo(false));
    }

    /**
     * @param $cid
     * @param $pref
     * @throws MysqlQueryException
     */
    public function stop_cam($cid, $pref)
    {
        $this->vlc->stop_cam(new CamID($cid), new CamPrefix($pref));
    }
}
