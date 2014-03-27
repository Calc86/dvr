<?php
/*
 * заглушка для восстановления вещания раз в во время или остановки, если в базе поменялось значение
 */
require_once dirname(__FILE__).'/../config.php';

$q = "select c.uid as uid, o.name as org, c.`cam-name` as cam, c.rec as rec from cam as c, org as o where o.id=c.uid and c.live=1";
$r = mysql_query($q);

while(($row = mysql_fetch_row($r)) != 0){
    list($uid,$cid,$rec) = $row;
    $cc = new cam_control_archive($uid, $org, $cam, 'rec');
    if($rec){
        $cc->play();
    }else
    {
        $cc->stop();
    }
    //$cc->play();    //добавить обработки ошибок и т.д.
}


