<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 20.06.14
 * Time: 20:46
 */

namespace system2;

/**
 * Удалить записи из mysql старше 30 дней, так же удалить файлы связанные с ними
 * Class RotateRecCommand
 * @package system2
 */
class RotateRecCommand implements ICommand {
    /**
     * @return void
     */
    public function execute()
    {
        $time = time() - RECORDS_KEEP * 24 * 60 * 60;
        $q_files = "select file from archive where date_end < $time";
        $q_delete = "delete from archive where date_end < $time";
        $r = \Database::getInstance()->query($q_files);

        //echo $q_delete."\n";
        //echo $q_files."\n";

        while( ($row = $r->fetch_row()) != false ){
            list($file) = $row;
            if(file_exists($file))
                unlink($file);
        }

        \Database::getInstance()->query($q_delete);

        $path = Path::getNfsPath(Path::RECORD);
        $keep = RECORDS_KEEP + 1;
        $files = new \BashCommand("find {$path}/* -mtime +$keep -exec rm {} \;");
        //echo $files."\n";
        $files->exec();

        $emptyDirs = new \BashCommand("find {$path}/* -mtime +1 -type d -empty -exec rmdir {} \;");
        //echo $emptyDirs."\n";
        $emptyDirs->exec();
    }
}
