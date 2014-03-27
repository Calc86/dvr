<?php
/*
 * глупый файл для обрезки видео раз в 10 минут
 * заглушка для восстановления вещания раз в во время или остановки, если в базе поменялось значение
 */
require_once dirname(__FILE__).'/../config.php';

$db = open_db(MYHOST, MYUSER, MYPASS, MYDB);

$q = "select user_id as uid, id as cid, live as live, rec as rec from cams";
$r = mysql_query($q);

while($row = mysql_fetch_row($r)){
    list($uid,$cid,$live,$rec) = $row;

    $cc_rec = new cam_control_archive($uid, $cid, 'rec');
    if($rec){
        $cc_rec->stop();
        $cc_rec->play();
    }
}

mysql_close($db);

