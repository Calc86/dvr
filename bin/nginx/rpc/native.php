<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 16.04.14
 * Time: 16:59
 */

require_once dirname(__FILE__) . '/../../config.php';    //все классы указаны в конфиге
require_once dirname(__FILE__) . '/../../system/include.php';

/**
 * Class rpc
 */
class native_rpc{
    /**
     * @var \system\System
     */
    private $system;
    private $uid;

    /**
     * @param $uid
     */
    public function __construct($uid)
    {
        $this->uid = $uid;
        $this->system = new \system\System();
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
    public function cam_play($camID, $camPrefix)
    {
        $this->system->cam_play(new UserID($this->uid), new CamID($camID), new CamPrefix($camPrefix));
    }

    /**
     * @param int $camID
     * @param string $camPrefix
     */
    public function cam_stop($camID, $camPrefix)
    {
        $this->system->cam_stop(new UserID($this->uid), new CamID($camID), new CamPrefix($camPrefix));
    }

    /**
     * @param int $camID
     */
    public function cam_update($camID)
    {
        $this->system->cam_update(new UserID($this->uid), new CamID($camID));
    }

    /**
     * @param int $camID
     */
    public function cam_reload($camID)
    {
        $this->system->cam_reload(new UserID($this->uid), new CamID($camID));
    }
}


$token = get_var('token');
$uid = (int)$token;
$cid = get_var('cid');
$pref = get_var('pref', CamPrefix::LIVE);
$func = get_var('func', '');

if($uid){
    $rpc = new native_rpc($uid);
    if($func != ''){
        try{
            switch($func){
                case 'cam_reload':
                    $rpc->$func($cid);
                default:
                    $rpc->$func($cid , $pref);
            }
            echo 'OK';
        }catch (Exception $e){
            echo '<pre>';
            echo $e->getMessage();
            echo $e->getFile();
            echo $e->getLine();
            echo $e->getTraceAsString();
            echo '</pre>';
        }
    }
}
