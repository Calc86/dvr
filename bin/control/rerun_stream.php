<?php
/*
 * заглушка для восстановления вещания раз в во время или остановки, если в базе поменялось значение
 */
require_once dirname(__FILE__).'/../config.php';

$db = open_db(MYHOST, MYUSER, MYPASS, MYDB);

$q = "select user_id as uid, id as cid, live as live, rec as rec from cams";

$r = mysql_query($q);

while(($row = mysql_fetch_row($r)) != 0){
    list($uid,$cid,$live,$rec) = $row;

    $cc_live = new cam_control(new UserID($uid), new CamID($cid), new CamPrefix(CamPrefix::LIVE));
    $cc_rec = new cam_control_archive(new UserID($uid), new CamID($cid), new CamPrefix(CamPrefix::RECORD));
    if($live){
        $cc_live->play(null);
    }else
    {
        $cc_live->stop();
    }
    
    if($rec && $live){
        $cc_rec->play(null);
    }else
    {
        $cc_rec->stop();
    }

    //mtn не перезапускаем, он должен жить своей жизнью
}

mysql_close($db);

