<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 31.03.14
 * Time: 12:29
 */

require_once dirname(__FILE__).'/../bin/config.php';    //все классы указаны в конфиге
require_once dirname(__FILE__).'/../bin/system/include.php';

/**
 * Class rpc
 */
class rpc{
    /**
     * @var \system\System
     */
    private $system;
    private $uid;

    public function __construct($uid)
    {
        $this->uid = $uid;
        $system = new \system\System();
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
$cid = get_var('cid');
$pref = get_var('pref',CamPrefix::LIVE);

/** @noinspection PhpIncludeInspection */
require_once 'Zend/XmlRpc/Server.php';

//проверка на авторизацию отложена на следующие реализации
$uid = $token;

$server = new Zend_XmlRpc_Server();

if($uid){
    //создаем экземпляр для сервера RPC
    $server->setClass('rpc','rpc',$uid);
    //echo '<pre>';
    //print_r($server);
    /*if($cid){
        //construct($oid,$cid,$pref='live')
        $server->setClass('cam_control','cam',$uid,$cid,$pref);
    }*/
}

echo $server->handle();
