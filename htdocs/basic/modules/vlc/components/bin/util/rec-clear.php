<?php
/*
 * удаляем все файлы из rec и mtn основываясь на mysql-cam-*-holdtime
 * 
 */

use app\modules\vlc\components\mysql\MysqlQueryException;

require_once dirname(__FILE__) . '/../config.php';

$db = open_db(MYHOST, MYUSER, MYPASS, MYDB);

$q = "select o.id as uid,c.`id` as cid,c.`rec-holdtime` as rec,c.`mtn-holdtime` as mtn from org as o, cam as c where c.uid=o.id";
$q = "select c.user_id as uid, c.id as cid, 30 as rec, 30 as mtn from cams as c";
$r = $db->query($q);

if(!$r) throw new MysqlQueryException($q);
$n = $r->num_rows;

$path = DIR;

//косяк в том, что при просмотре затирается дата файлика и подобная хрень уж очень не стабильно работает...
$cmd = '/usr/bin/find {path}/{uid} -mtime +{days} -and -type f -and -name "*UID_{uid}__CID_{cid}*avi"';
//echo $cmd."\n";

while(($row = $r->fetch_assoc()) != 0){
    echo $row['uid'].' '.$row['cid'].' ';
    //print_r($row);
    
    //шарим по файликам
    $exec['rec'] = str_replace(array('{path}','{days}','{cid}','{uid}'), array($path."/rec",$row['rec'],$row['cid'],$row['uid']), $cmd);
    $exec['mtn'] = str_replace(array('{path}','{days}','{cid}','{uid}'), array($path."/mtn",$row['mtn'],$row['cid'],$row['uid']), $cmd);
    //print_r($exec);
    foreach($exec as $k=>$v){
        $ret = `$v`;
        //echo $v;
        $lines = explode("\n",$ret);
        echo ' '.$k.':'.(count($lines)-1);  // -1 is "\n" where is empty find
        //print_r($lines);
        foreach($lines as $file){
            if($file != ''){
                exec("rm -f $file");    //самое быстрое удаление файликов
                echo '+';
            }
            //unlink($file);
        }
        //echo $ret."\n";
    }
    echo "\n";
}

$db->close();
