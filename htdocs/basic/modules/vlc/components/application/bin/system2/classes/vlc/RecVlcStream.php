<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 19:11
 */

namespace system2;

use app\modules\vlc\components\ICam;

/**
 * Класс для потока записи в файл
 * Class RecVlcStream
 * @package system2
 */
class RecVlcStream extends VlcReStream
{
    /**
     * @var TimeLock|null для update
     */
    private ?TimeLock $lock = null;
    private int $timeLock = 0;
    private string $streamPath = '';

    /**
     * Переменная для хранения старого имени файла
     * @var string
     */
    protected string $oldRec = '';

    /**
     * @param ICam $cam
     * @param LiveVlcStream $live
     * @param int $timeLock
     * @param string $streamPath
     */
    function __construct(ICam $cam, LiveVlcStream $live, $timeLock = TIME_LOCK_RECORD, string $streamPath = Path::RECORD)
    {
        parent::__construct($cam, $live, $streamPath);

        $this->streamPath = $streamPath;

        $this->lock = new TimeLock($this->getVlcName(), $timeLock);
    }

    /**
     * Возвращает путь файла в котором будем хранить имя файла для будущего перемещения
     * @return string
     */
    protected function getRecFilePath(): string
    {
        return Path::getTmpfsPath(Path::TEMP) . "/{$this->cam->getID()}_$this->streamPath.file";
    }

    /**
     * Получить выходную строку для использования в vlm в vlc
     * @param string $transcode
     * @return string
     */
    protected function getOutputVlm(string $transcode = ''): string
    {
        $date = date("Ymd");
        $time = date("His");

        $path = $this->streamPath . "/{$this->cam->getDVR()->getID()}/$date";
        Path::getNfsPath($path);    //create dir on NFS
        $realPath = Path::getTmpfsPath($path);

        $filePath = "$realPath/{$this->cam->getID()}_$time";

        file_put_contents($this->getRecFilePath(), $filePath);

        //return "#std{access=file,mux=mp4,dst=$filePath.avi}";
        // vlc in loop need to append file
        return "#std{access=file{append},mux=ts{use-key-frames},dst=$filePath.avi}";
    }

    /**
     * @return string path on ''
     */
    protected function getNfsPath(): string
    {
        return str_replace(Path::TMPFS, Path::NFS, $this->oldRec);
    }

    /**
     * @return string path or '' if no path
     */
    protected function getTmpfsPath(): string
    {
        if (file_exists($this->getRecFilePath()))
            return trim(file_get_contents($this->getRecFilePath()));
        else
            return '';
    }

    /**
     *
     */
    protected function moveToNfs()
    {
        $this->log(__FUNCTION__);

        $file = $this->oldRec;
        if ($file == '') return;
        $avi = $file . ".avi";

        // change tmpfs to nfs
        $path = $this->getNfsPath();
        $mp4 = $path . ".mp4";

        System::getInstance()->addCommand(new MoveVideoCommand($avi, $mp4, $path));

        //Мы сделали всё что могил, теперь удаляем следы нашего пребывания
        //unlink($this->getRecFilePath());
    }

    public function stop()
    {
        $this->oldRec = $this->getTmpfsPath();

        parent::stop();
        parent::delete();

        $this->moveToNfs();
    }


    public function update()
    {
        parent::update();
        //if(!System::getInstance()->getFlag(System::FLAG_STOP))
        if (!$this->lock->create()) return;    //время не пришло

        $this->stop();
        $this->start();
    }

    public function _start()
    {
        parent::create();
        parent::_start();
        //создаем timelock
        $this->lock->create();
    }
}
