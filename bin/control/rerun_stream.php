<?php
/*
 * заглушка для восстановления вещания раз в во время или остановки, если в базе поменялось значение
 */
require_once dirname(__FILE__).'/../config.php';

$db = open_db(MYHOST, MYUSER, MYPASS, MYDB);

$q = "select user_id as uid, id as cid, live as live, rec as rec from cams";

$r = mysql_query($q);

while($row = mysql_fetch_row($r)){
    list($uid,$cid,$live,$rec) = $row;

    $cc_live = new cam_control($uid, $cid, 'live');
    $cc_rec = new cam_control_archive($uid, $cid, 'rec');
    if($live){
        $cc_live->play(0);
    }else
    {
        $cc_live->stop();
    }
    
    if($rec && $live){
        $cc_rec->play(0);
    }else
    {
        $cc_rec->stop();
    }

    //mtn не перезапускаем, он должен жить своей жизнью
}

mysql_close($db);

