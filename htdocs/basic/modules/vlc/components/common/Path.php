<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 15:46
 */

namespace app\modules\vlc\components\common;

/**
 * Class Path
 * @package system2
 * Управление нашими путями
 */
class Path
{
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

    private static array $dirs = [
        '/tmp' => ['dvr'],
        Path::LOCAL => [Path::ETC, Path::PROCESS, Path::LOG, Path::MOTION],
        Path::TMPFS => [Path::IMAGE, Path::RECORD, Path::MOTION, Path::TEMP, Path::LIVE_HTTP],
        PATH::NFS => [Path::RECORD, Path::MOTION],
    ];

    public static function createAll()
    {
        foreach (static::$dirs as $target => $array) {
            $basePath = DIR . "/$target";
            if (strpos($target, "/") != FALSE) {
                $basePath = $target;
            }

            static::createDir($basePath);
            foreach ($array as $dir) {
                $path = $basePath . "/" . $dir;
                static::createDir($path);
            }
        }
    }

    /**
     * Создать директорию рекурсивно
     * @param $path
     */
    public static function createDir($path)
    {
        if (!is_dir($path)) {
            mkdir($path, 0775, true);
        }
    }

    /**
     * @return string
     */
    public static function getRoot(): string
    {
        return DIR;
    }

    /**
     * Получить путь к папке за одно создаем ее
     * @param $path1
     * @param string $path2
     * @return string
     */
    public static function getPath($path1, string $path2 = ''): string
    {
        if ($path2 != '')
            $path1 .= '/' . $path2;
        static::createDir($path1);
        return $path1;
    }

    /**
     * Получить путь в локальной файловой системе
     * @param string $path
     * @return string
     */
    public static function getLocalPath(string $path = ''): string
    {
        return static::getPath(static::getRoot() . "/" . Path::LOCAL, $path);
    }

    /**
     * Получить путь в RAM файловой системе
     * @param string $path
     * @return string
     */
    public static function getTmpfsPath(string $path = ''): string
    {
        return static::getPath(static::getRoot() . "/" . Path::TMPFS, $path);
    }

    /**
     * Получить путь NFS
     * @param string $path
     * @return string
     */
    public static function getNfsPath(string $path = ''): string
    {
        return static::getPath(static::getRoot() . "/" . Path::NFS, $path);
    }
}
