<?php
/**
 * Запускается раз в 10 минут (время нарезки видеофайлов)
 * и прописывает им pts записи, это позволяет просматривать видео в теге <video>
 * Операция на 1 файл в среднем должна занимать 1 минутку
 */

require_once dirname(__FILE__).'/../config.php';

$db = open_db(MYHOST, MYUSER, MYPASS, MYDB);

//делаем лимит, так как у нас сейчас оооочень много непроконверченных файликов
$q = "select id,file from archive where rebuilded='no' and type='rec' order by id desc limit 50";
$r = mysql_query($q);

$nas = new nas();
if($nas->is_mount()){
    while(($row=mysql_fetch_row($r)) != 0){
        list($id,$file) = $row;
        echo "start #$id ";
        $time = time();
        $start = microtime_float();
        //ребилдим pts
        if(file_exists($file.'.avi'))
            `ffmpeg -y -fflags +genpts -i $file.avi -codec copy $file.mp4 1>> /dev/null 2>>/dev/null`;
        //удаляем старый файл
        //todo: нужна проверка на примонтированность
        if(file_exists($file.'.mp4'))
            `rm $file.avi 2>>/dev/null 1>>/dev/null`;
        $end = microtime_float();
        $r_time = $end-$start;

        $qu = "update archive set rebuilded='yes', date_rebuild=$time, time_rebuild=$r_time where id=$id";
        mysql_query($qu);
        echo "stop\n";
    }
}

mysql_close($db);

/*$file = $argv[1];

`ffmpeg -fflags +genpts -i $file.avi -codec copy $file.mp4 1>> /dev/null 2>>/dev/null`;
`rm $file.avi 2>>/dev/null 1>>/dev/null`;
*/

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
