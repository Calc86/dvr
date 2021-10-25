<?php
/*
 * Скрипт запуска системы при смерти машины
 */

use system\Vlc;

require_once dirname(__FILE__) . '/../config.php';

$db = open_db(MYHOST, MYUSER, MYPASS, MYDB);
$q = "select id,login from users where banned=0";
$r = $db->query($q);
if(!$r) throw new MysqlQueryException($q);

try{
    while(($row = $r->fetch_row()) != 0){
        list($uid,$name) = $row;
        $vlc = new Vlc(new UserID($uid));
        echo "запускаем $name\n";
        $vlc->ps_kill(); //убить живые процессы, если есть (для безопасности)
        $vlc->start();
    }
}
catch (PathException $e){
    echo $e->getMessage();
    throw $e;
}


$db->close();

