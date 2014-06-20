<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 02.06.14
 * Time: 11:42
 */

namespace system2;

/**
 * Class MoveVideoCommand
 * @package system2
 */
class MoveVideoICommand implements ICommand {
    private $avi;
    private $mp4;
    private $path;

    /**
     * @param $avi string path to avi file on local
     * @param $mp4 string path to mp4 file on nfs
     * @param $path string path on nfs
     */
    function __construct($avi, $mp4, $path)
    {
        $this->avi = $avi;
        $this->mp4 = $mp4;
        $this->path = $path;
    }

    /**
     * @return void
     */
    public function execute()
    {
        //ffmpeg необходим для правильного заполения метаданных, так как у vlc с этим проблемы (по крайней мере у 2.0.10)
        $ffmpeg = new \BashCommand("ffmpeg -y -i $this->avi -codec copy $this->mp4\n");
        Log::getInstance()->put($ffmpeg, __CLASS__);

        $ffmpeg->exec();

        //если это какой либо мжпег поток и ffmpeg вышел с ошибкой, но создал нулевой файл
        // обычно если ffmpeg не может сделать файлик, то размер его 203 байта.... ы(
        if(file_exists($this->mp4) && (filesize($this->mp4) <= 300)){
            unlink($this->mp4);
            Log::getInstance()->put("файл $this->mp4 имеет нулевой размер", __CLASS__);
        }

        //если ffmpeg не создал файл или мы удалили нулевой файл
        if(!file_exists($this->mp4)){
            $mv = new \BashCommand("mv $this->avi $this->path.avi\n");
            Log::getInstance()->put($mv, __CLASS__);
            $mv->exec();
        }
        else{
            //файлик успешно переехал на новое место
            if(file_exists($this->avi))
                unlink($this->avi);
        }
    }
} 