<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 02.06.14
 * Time: 11:42
 */

namespace app\modules\dvr\components\vlc2;

use app\modules\dvr\components\common\Log;
use app\modules\dvr\components\exceptions\StringException;
use app\modules\dvr\components\interfaces\ICommand;
use app\modules\dvr\components\types\BashCommand;

/**
 * Class MoveVideoCommand
 * @package system2
 */
class MoveVideoCommand implements ICommand
{
    private string $avi;
    private string $mp4;
    private string $path;

    /**
     * @param $avi string path to avi file on local
     * @param $mp4 string path to mp4 file on nfs
     * @param $path string path on nfs
     */
    function __construct(string $avi, string $mp4, string $path)
    {
        $this->avi = $avi;
        $this->mp4 = $mp4;
        $this->path = $path;
    }

    /**
     * @return void
     * @throws StringException
     */
    public function execute()
    {
        //ffmpeg необходим для правильного заполнения метаданных, так как у vlc с этим проблемы (по крайней мере у 2.0.10)
        $ffmpeg = new BashCommand("ffmpeg -y -i $this->avi -codec copy $this->mp4\n");
        Log::getInstance()->put($ffmpeg, __METHOD__);

        $ffmpeg->exec();

        // Если это какой-либо mjpeg поток и ffmpeg вышел с ошибкой, но создал нулевой файл
        // обычно если ffmpeg не может сделать файл, то размер его 203 байта.... ы(
        if (file_exists($this->mp4) && (filesize($this->mp4) <= 300)) {
            unlink($this->mp4);
            Log::getInstance()->put("файл $this->mp4 имеет нулевой размер", __METHOD__);
        }

        //если ffmpeg не создал файл или мы удалили нулевой файл
        if (!file_exists($this->mp4)) {
            $mv = new BashCommand("mv $this->avi $this->path.avi\n");
            Log::getInstance()->put($mv, __METHOD__);
            $mv->exec();
        } else {
            //файл успешно переехал на новое место
            if (file_exists($this->avi))
                unlink($this->avi);
        }
    }
}
