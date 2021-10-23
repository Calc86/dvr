<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 21.05.14
 * Time: 23:07
 */

namespace system2;

use app\modules\vlc\components\vlc2\RecVlcStream;

/**
 * Измененный алгоритм перемещения на NFS, добавление записи в mysql
 * Class BBRecStream
 * @package system2
 */
class BBRecStream extends RecVlcStream{

    /**
     * @throws MysqlQueryException
     */
    protected function moveToNfs()
    {

        $tmpPath = $this->oldRec;
        $nfsPath = $this->getNfsPath();
        if($tmpPath == '') return;
        if($nfsPath == '') return;
        if(!file_exists($tmpPath.'.avi')) return;

        //vlc change ctime and mtime... (
        //$cTime = filectime($tmpPath.'.avi');
        $cTime = fileatime($tmpPath.'.avi');
        $mTime = filemtime($tmpPath.'.avi');
        //$mTime = time();

        $start = microtime_float();
        parent::moveToNfs();
        $stop = microtime_float();
        $time = $stop - $start;
        $now = time();

        //save to mysql;
        $q = "insert into archive values(0, {$this->cam->getID()}, '{$this->getName()}', $cTime, $mTime, $now, $time, 'yes', 0, '$nfsPath')";
        $this->log($q);
        $db = Database::getInstance();
        $db->query($q);
    }
}
