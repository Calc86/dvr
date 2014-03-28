<?php

/*
 * RPC server для управления vlc
 * ln -s /home/vlc/vlc/rpc /var/www/html/rpc
 */

require_once dirname(__FILE__).'/../bin/config.php';    //все классы указаны в конфиге
/** @noinspection PhpIncludeInspection */
require_once 'Zend/XmlRpc/Server.php';

$db = open_db(MYHOST, MYUSER, MYPASS, MYDB);

$token = get_var('token');
$cid = get_var('cid');
$pref = get_var('pref',CamPrefix::LIVE);

//проверка на авторизацию отложена на следующие реализации
$uid = $token;

$server = new Zend_XmlRpc_Server();

if($uid){
    //создаем экземпляр для сервера RPC
    $server->setClass('vlc_rpc','vlc',$uid);
    //echo '<pre>';
    //print_r($server);
    if($cid){
        //construct($oid,$cid,$pref='live')
        $server->setClass('cam_control','cam',$uid,$cid,$pref);
    }
}

echo $server->handle();

