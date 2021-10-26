<?php

namespace app\modules\dvr\components;

use Yii;
use yii\base\Model;

/**
 * Общий файл конфигурации для системы (System2)
 * взамен htdocs/basic/modules/dvr/components/bin/main.php
 * и htdocs/basic/modules/dvr/components/common/Path.php
 */
class SystemConfig extends Model
{
    const PERMISSIONS = 0750;

    public string $tz = 'Europe/Moscow';    // todo 20211126 UTC
    // Paths
    public string $root = '@dvr/data';   // todo 20211025
    /** @var string Путь к локальной файловой системе */
    public string $local = 'local';
    /** @var string Путь к RAM системе */
    public string $tmpFs = 'tmpfs';
    /** @var string Путь к сетевому хранилищу */
    public string $nfs = 'nfs';
    /** @var string Путь к файлам настроек */
    public string $etc = 'etc';
    public string $log = 'log';
    /** @var string Куда класть pid файлы */
    public string $proc = 'proc';
    /** @var string Куда складываем screenshots */
    public string $image = 'img';
    /** @var string Место хранения записей */
    public string $record = 'rec';
    /** @var string Куда кладем motion detection */
    public string $motion = 'mtn';
    /** @var string Директория для временных файлов */
    public string $tmp = 'tmp';
    /** @var string HLS files location */
    public string $liveHttp = 'lhttp';
    public string $lock = 'lock';
    public int $recordsTTL = 30;    // days

    public function default(): SystemConfig
    {
        return new self();
    }

    private array $dirs = [];
    
    public function init()
    {
        parent::init();

        $this->root = Yii::getAlias($this->root);

        $this->dirs = [
            '/tmp' => ['dvr'],
            $this->local => [$this->etc, $this->proc, $this->log, $this->motion],
            $this->tmpFs => [$this->image, $this->record, $this->motion, $this->tmp, $this->liveHttp],
            $this->nfs => [$this->record, $this->motion],
        ];
    }

    public function createAll()
    {
        foreach ($this->dirs as $target => $array) {
            $basePath = $this->root . "/$target";
            if (strpos($target, "/") != FALSE) {
                $basePath = $target;
            }

           $this->createDir($basePath);
            foreach ($array as $dir) {
                $path = $basePath . "/" . $dir;
                $this->createDir($path);
            }
        }
    }

    /**
     * Создать директорию рекурсивно
     * @param $path
     */
    public function createDir($path)
    {
        if (!is_dir($path)) mkdir($path, self::PERMISSIONS, true);
    }

    /**
     * @return string
     */
    public function getRoot(): string
    {
        return $this->root;
    }

    /**
     * Получить путь к папке за одно создаем ее
     * @param $path1
     * @param string $path2
     * @return string
     */
    public function getPath($path1, string $path2 = ''): string
    {
        if ($path2 != '')
            $path1 .= '/' . $path2;
       $this->createDir($path1);
        return $path1;
    }

    /**
     * Получить путь в локальной файловой системе
     * @param string $path
     * @return string
     */
    public function getLocalPath(string $path = ''): string
    {
        return$this->getPath($this->getRoot() . "/" . $this->local, $path);
    }

    /**
     * Получить путь в RAM файловой системе
     * @param string $path
     * @return string
     */
    public function getTmpfsPath(string $path = ''): string
    {
        return$this->getPath($this->getRoot() . "/" . $this->tmpFs, $path);
    }

    /**
     * Получить путь NFS
     * @param string $path
     * @return string
     */
    public function getNfsPath(string $path = ''): string
    {
        return$this->getPath($this->getRoot() . "/" . $this->nfs, $path);
    }
}
