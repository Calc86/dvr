<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 16.04.14
 * Time: 16:59
 */

use app\modules\vlc\types\CamID;
use app\modules\vlc\types\CamPrefix;
use app\modules\vlc\types\UserID;
use system\System;

/**
 * Class rpc
 * @deprecated Есть такой же класс в system2
 */
class NativeRpc
{
    /**
     * @var System
     */
    private $system;
    private $uid;

    /**
     * @param $uid
     */
    public function __construct($uid)
    {
        $this->uid = $uid;
        $this->system = new System();
    }

    /*
    public function startup()
    {
    }

    public function shutdown()
    {
    }

    public function update()
    {
    }
    */

    public function user_start()
    {
        $this->system->user_start(new UserID($this->uid));
    }

    public function user_stop()
    {
        $this->system->user_stop(new UserID($this->uid));
    }


    /**
     * @param int $camID
     * @param string $camPrefix
     */
    public function cam_play(int $camID, string $camPrefix)
    {
        $this->system->cam_play(new UserID($this->uid), new CamID($camID), new CamPrefix($camPrefix));
    }

    /**
     * @param int $camID
     * @param string $camPrefix
     */
    public function cam_stop(int $camID, string $camPrefix)
    {
        $this->system->cam_stop(new UserID($this->uid), new CamID($camID), new CamPrefix($camPrefix));
    }

    /**
     * @param int $camID
     */
    public function cam_update(int $camID)
    {
        $this->system->cam_update(new UserID($this->uid), new CamID($camID));
    }

    /**
     * @param int $camID
     */
    public function cam_reload(int $camID)
    {
        $this->system->cam_reload(new UserID($this->uid), new CamID($camID));
    }
}


$token = get_var('token');
$uid = (int)$token;
$cid = get_var('cid');
$pref = get_var('pref', CamPrefix::LIVE);
$func = get_var('func', '');

if ($uid) {
    $rpc = new NativeRpc($uid);
    if ($func != '') {
        try {
            switch ($func) {
                case 'cam_reload':
                    $rpc->$func($cid);
                default:
                    $rpc->$func($cid, $pref);
            }
            echo 'OK';
        } catch (Exception $e) {
            echo '<pre>';
            echo $e->getMessage();
            echo $e->getFile();
            echo $e->getLine();
            echo $e->getTraceAsString();
            echo '</pre>';
        }
    }
}
