<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 19:11
 */

namespace system2;

/**
 * Класс для потока записи в файл
 * Class RecVlcStream
 * @package system2
 */
class RecVlcStream extends VlcReStream {
    /**
     * @param ICam $cam
     * @param LiveVlcStream $live
     */
    function __construct(ICam $cam, LiveVlcStream $live)
    {
        parent::__construct($cam, $live, 'rec');
    }

    /**
     * возвращает путь файлка в котором будем хранить имя файла для будущего перемещения
     * @return string
     */
    protected function getRecFilePath(){
        return Path::getTmpfsPath(Path::TEMP)."/{$this->cam->getID()}_rec.file";
    }

    /**
     * получить выходную строку для использования в vlm в vlc
     * @param string $transcode
     * @return string
     */
    protected function getOutputVlm($transcode = '')
    {
        $date = date("Ymd");
        $time = date("His");

        $path = Path::RECORD."/{$this->cam->getDVR()->getID()}/$date";
        Path::getNfsPath($path);    //create dir on NFS
        $realPath = Path::getTmpfsPath($path);

        $filePath = "$realPath/{$this->cam->getID()}_$time";

        file_put_contents($this->getRecFilePath(), $filePath);

        //return "#std{access=file,mux=mp4,dst=$filePath.avi}";
        // vlc in loop need to append file
        return "#std{access=file{append},mux=ts{use-key-frames},dst=$filePath.avi}";
    }

    protected function moveToNfs(){
        if(file_exists($this->getRecFilePath())){
            $file = trim(file_get_contents($this->getRecFilePath()));
            $avi = $file.".avi";

            // change tmpfs to nfs
            $path = str_replace(Path::TMPFS, Path::NFS, $file);
            $mp4 = $path.".mp4";

            //ffmpeg необходим для правильного заполения метаданных, так как у vlc с этим проблемы (по крайней мере у 2.0.10)
            $ffmpeg = new \BashCommand("ffmpeg -y -i $avi -codec copy $mp4\n");
            $this->log($ffmpeg);

            $ffmpeg->exec();

            //если это какой либо мжпег поток и ffmpeg вышел с ошибкой, но создал нулевой файл
            // обычно если ffmpeg не может сделать файлик, то размер его 203 байта.... ы(
            if(file_exists($mp4) && (filesize($mp4) <= 300)){
                unlink($mp4);
                $this->log("файл $mp4 имеет нулевой размер");
            }

            //если ffmpeg не создал файл или мы удалили нулевой файл
            if(!file_exists($mp4)){
                $mv = new \BashCommand("mv $avi $path.avi\n");
                $this->log($mv);
                $mv->exec();
            }
            else{
                //файлик успешно переехал на новое место
                if(file_exists($avi))
                    unlink($avi);
            }

            //Мы сделали всё что могил, теперь удаляем следы нашего пребывания
            unlink($this->getRecFilePath());
        }
    }

    public function stop()
    {
        parent::stop();

        $this->moveToNfs();
    }


    public function update()
    {
        parent::update();

        $this->stop();
        $this->start();
    }
}
