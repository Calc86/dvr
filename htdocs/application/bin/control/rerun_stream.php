<?php
/*
 * заглушка для восстановления вещания раз в во время или остановки, если в базе поменялось значение
 */
require_once dirname(__FILE__) . '/../config.php';

$db = open_db(MYHOST, MYUSER, MYPASS, MYDB);

$q = "select user_id as uid, id as cid, live as live, rec as rec from cams";
$r = $db->query($q);
if(!$r) throw new MysqlQueryException($q);

while(($row = $r->fetch_row()) != 0){
    list($uid,$cid,$live,$rec) = $row;

    $cc_live = new cam_control(new UserID($uid), new CamID($cid), new CamPrefix(CamPrefix::LIVE));
    $cc_rec = new cam_control_archive(new UserID($uid), new CamID($cid), new CamPrefix(CamPrefix::RECORD));

    if($live){
        $cc_live->play();
    }else
    {
        $cc_live->stop();
    }
    
    if($rec && $live){
        //do not start play, he is rewrite date in archive
        //$cc_rec->play();
    }else
    {
        $cc_rec->stop();
    }

    //mtn не перезапускаем, он должен жить своей жизнью
}

$db->close();

