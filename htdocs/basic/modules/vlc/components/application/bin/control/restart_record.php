<?php
/*
 * глупый файл для обрезки видео раз в 10 минут
 * заглушка для восстановления вещания раз в во время или остановки, если в базе поменялось значение
 */
require_once dirname(__FILE__) . '/../config.php';

$db = open_db(MYHOST, MYUSER, MYPASS, MYDB);

$q = "select user_id as uid, id as cid, live as live, rec as rec from cams";
$r = $db->query($q);
if(!$r) throw new MysqlQueryException($q);

while(($row = $r->fetch_row()) != 0){
    list($uid,$cid,$live,$rec) = $row;

    $cc_rec = new CamControlArchive(new UserID($uid), new CamID($cid), new CamPrefix(CamPrefix::RECORD));
    if($rec){
        $cc_rec->stop();
        $cc_rec->play();
    }
}

$db->close();
