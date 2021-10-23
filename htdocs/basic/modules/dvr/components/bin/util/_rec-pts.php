<?php
/**
 * Запускается раз в 10 минут (время нарезки видеофайлов)
 * и прописывает им pts записи, это позволяет просматривать видео в теге <video>
 * Операция на 1 файл в среднем должна занимать 1 минутку
 */

use app\modules\dvr\components\mysql\MysqlQueryException;
use app\modules\dvr\components\nas\Nas;
use app\modules\dvr\components\types\BashCommand;

require_once dirname(__FILE__) . '/../config.php';

$db = open_db(MYHOST, MYUSER, MYPASS, MYDB);

//делаем лимит, так как у нас сейчас оооочень много непроконверченных файликов
$q = "select id,file from archive where rebuilded='no' and type='rec' order by id desc limit 50";
$r = $db->query($q);
if(!$r) throw new MysqlQueryException($q);

$nas = new Nas();
if($nas->is_mount()){
    while(($row=$r->fetch_row()) != 0){
        list($id,$file) = $row;
        echo "start #$id ";
        $time = time();
        $start = microtime_float();
        //ребилдим pts
        /*if(file_exists($file.'.avi'))
            `ffmpeg -y -fflags +genpts -i $file.avi -codec copy $file.mp4 1>> /dev/null 2>>/dev/null`;
        //удаляем старый файл
        //todo: нужна проверка на примонтированность
        if(file_exists($file.'.mp4'))
            `rm $file.avi 2>>/dev/null 1>>/dev/null`;*/

        //перемещаем файл
        $path = str_replace('/rec/','/pre_rec/',$file);
        $newPath = $file;
        if(!is_dir(dirname($newPath))){
            mkdir(dirname($newPath));
        }
        $ffmpeg = new BashCommand("ffmpeg -y -i $path.avi -codec copy $newPath.mp4\n");
        echo $ffmpeg;
        $ffmpeg->exec();
        //если это какой либо мжпег поток
        if(file_exists($newPath.'.mp4') && filesize($newPath.".mp4") == 0){
            unlink($newPath.".mp4");
            `mv $path.avi $newPath.avi`;
        }
        else{
            if(file_exists($path.'.avi'))
                unlink($path.".avi");
        }

        $end = microtime_float();
        $r_time = $end-$start;

        $qu = "update archive set rebuilded='yes', date_rebuild=$time, time_rebuild=$r_time where id=$id";
        if(!$db->query($qu)) throw new MysqlQueryException($qu.";".$db->error);
        echo "stop\n";
    }
}

$db->close();

/*$file = $argv[1];

`ffmpeg -fflags +genpts -i $file.avi -codec copy $file.mp4 1>> /dev/null 2>>/dev/null`;
`rm $file.avi 2>>/dev/null 1>>/dev/null`;
*/


