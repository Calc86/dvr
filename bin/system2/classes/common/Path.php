<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 15:46
 */

namespace system2;

/**
 * Class Path
 * @package system2
 * Управление нашими путями
 */
class Path {
    /*private $dirs = array(
        //'bin',
        'etc', 'proc', 'rec', 'pre_rec', 'pre_mtn', 'mtn', 'log', 'img', 'tmp', 'lhttp'
    );*/

    const LOCAL = 'local';
    const TMPFS = 'tmpfs';
    const NFS = 'nfs';

    const ETC = 'etc';
    const PROCESS = 'proc';
    const LOG = 'log';
    const MOUNT = 'mount';
    const LOCKS = 'lock';

    const IMAGE = 'img';
    const RECORD = 'rec';
    const MOTION = 'mtn';
    const TEMP = 'tmp';
    const LIVE_HTTP = 'lhttp';

    private static $dirs = array(
        '/tmp' => array('dvr'),
        Path::LOCAL => array(Path::ETC,   Path::PROCESS, Path::LOG,    Path::MOTION),
        Path::TMPFS => array(Path::IMAGE, Path::RECORD,  Path::MOTION, Path::TEMP, Path::LIVE_HTTP),
        PATH::NFS =>   array(Path::RECORD, Path::MOTION),
    );

    public static function createAll(){
        foreach(static::$dirs as $target=>$array){
            $basePath = DIR."/$target";
            if(strpos($target, "/") != FALSE){
                $basePath = $target;
            }

            static::createDir($basePath);
            foreach($array as $dir){
                $path = $basePath."/".$dir;
                static::createDir($path);
            }
        }
    }

    /**
     * Создать директорию рекурсивно
     * @param $path
     */
    public static function createDir($path){
        if(!is_dir($path)){
            mkdir($path, 0775, true);
        }
    }

    /**
     * @return string
     */
    public static function getRoot(){
        return DIR;
    }

    /**
     * Получить путь к папке за одно создаем ее
     * @param $path1
     * @param string $path2
     * @return string
     */
    protected static function getPath($path1, $path2 = ''){
        if($path2 != '')
            $path1.= '/'.$path2;
        static::createDir($path1);
        return $path1;
    }

    /**
     * Получить путь в локальной файловой системе
     * @param string $path
     * @return string
     */
    public static function getLocalPath($path = ''){
        return static::getPath(static::getRoot()."/".Path::LOCAL,$path);
    }

    /**
     * получить путь в RAM файловой системе
     * @param string $path
     * @return string
     */
    public static function getTmpfsPath($path = ''){
        return static::getPath(static::getRoot()."/".Path::TMPFS,$path);
    }

    /**
     * получить путь NFS
     * @param string $path
     * @return string
     */
    public static function getNfsPath($path = ''){
        return static::getPath(static::getRoot()."/".Path::NFS,$path);
    }
}
