<?php
/*
 * Скрипт запуска системы при смерте машины
 */
require_once dirname(__FILE__).'/../config.php';

$db = open_db(MYHOST, MYUSER, MYPASS, MYDB);
$q = "select id,login from users where banned=0";
$r = mysql_query($q);

while(($row = mysql_fetch_row($r)) != 0){
    list($uid,$name) = $row;
    $vlc = new vlc(new UserID($uid));
    echo "запускаем $name\n";
    $vlc->ps_kill(); //убить живые процессы, если есть (для безопасности)
    $vlc->start();
}

mysql_close($db);


