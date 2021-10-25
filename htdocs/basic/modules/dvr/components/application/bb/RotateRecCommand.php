<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 20.06.14
 * Time: 20:46
 */

namespace system2;

use app\modules\dvr\components\exceptions\StringException;
use app\modules\dvr\components\interfaces\ICommand;
use app\modules\dvr\components\mysql\Database;
use app\modules\dvr\components\mysql\MysqlQueryException;
use app\modules\dvr\components\SystemConfig;
use app\modules\dvr\components\types\BashCommand;

/**
 * Удалить записи из mysql старше 30 дней, так же удалить файлы связанные с ними
 * Class RotateRecCommand
 * @package system2
 */
class RotateRecCommand implements ICommand {
    private SystemConfig $config;

    public function __construct()
    {
        $this->config = new SystemConfig(); // todo 20211025
    }

    /**
     * @return void
     * @throws MysqlQueryException|StringException
     */
    public function execute()
    {
        $time = time() - $this->config->recordsTTL * 24 * 60 * 60;
        $q_files = "select file from archive where date_end < $time";
        $q_delete = "delete from archive where date_end < $time";
        $r = Database::getInstance()->query($q_files);

        //echo $q_delete."\n";
        //echo $q_files."\n";

        while( ($row = $r->fetch_row()) != false ){
            list($file) = $row;
            if(file_exists($file))
                unlink($file);
        }

        Database::getInstance()->query($q_delete);

        $path = $this->config->getNfsPath($this->config->record);
        $keep = RECORDS_KEEP + 1;
        $files = new BashCommand("find $path/* -mtime +$keep -exec rm {} \;");
        //echo $files."\n";
        $files->exec();

        $emptyDirs = new BashCommand("find $path/* -mtime +1 -type d -empty -exec rmdir {} \;");
        //echo $emptyDirs."\n";
        $emptyDirs->exec();
    }
}
