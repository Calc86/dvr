<?php

/*
 * RPC server для управления vlc
 * ln -s /home/vlc/vlc/rpc /var/www/html/rpc
 */

require_once dirname(__FILE__) . '/../bin/config.php';    //все классы указаны в конфиге

$db = open_db(MYHOST, MYUSER, MYPASS, MYDB);
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
    $server->setClass('VlcRpc','vlc',$uid);
    //echo '<pre>';
    //print_r($server);
    if($cid){
        //construct($oid,$cid,$pref='live')
        $server->setClass('CamControl','cam',$uid,$cid,$pref);
    }
}

echo $server->handle();



// Use reflection to get method names and parameters
/*$my = new vlc_rpc($token);

$mirror = new ReflectionClass($my);
foreach ($mirror->getMethods() as $method)
{
    // Create new "lambda" function for each method

    // Generate argument list
    $args = array();
    foreach ($method->getParameters() as $param)
    {
        $args[] = '$'.$param->getName();
    }
    $args = implode(',', $args);

    // Generate code
    $methodname = $method->getName();
    $code = "return vlc_rpc->{$methodname}({$args});";

    // Create function, retrieve function name
    $function_name = create_function($args, $code);

    // Register the function
    xmlrpc_server_register_method($myserver, $methodname, $function_name);
}*/