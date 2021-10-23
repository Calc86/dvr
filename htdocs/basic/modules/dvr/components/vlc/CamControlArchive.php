<?php

namespace app\modules\dvr\components\vlc;

use app\modules\dvr\components\exceptions\MysqlQueryException;
use app\modules\dvr\components\mysql\Database;
use app\modules\dvr\components\types\CamID;
use app\modules\dvr\components\types\CamPrefix;
use app\modules\dvr\components\types\UserID;
use app\modules\dvr\components\types\YesNo;

class CamControlArchive extends CamControl
{

    /**
     * @param UserID $uid
     * @param CamID $cid
     * @param CamPrefix|null $pref
     */
    public function __construct(UserID $uid, CamID $cid, ?CamPrefix $pref = null)
    {
        if ($pref == null) $pref = new CamPrefix(CamPrefix::LIVE);
        parent::__construct($uid, $cid, $pref);
    }


    /**
     * @param YesNo $new_file
     * @throws MysqlQueryException
     */
    public function play(?YesNo $new_file = null)
    {
        $db = Database::getInstance()->getDB();
        if (is_null($new_file)) $new_file = new YesNo(true);
        parent::play($new_file);

        if ($new_file) {
            switch ($this->pref) {
                case CamPrefix::RECORD:
                case CamPrefix::MOTION:
                    // занести информацию о нашем файле в базу
                    $now = time();
                    $path = $this->filename;
                    $newPath = str_replace("pre_$this->pref", $this->pref, $this->filename);

                    /*//перемещаем файл
                    if(!is_dir(dirname($newPath))){
                        mkdir(dirname($newPath));
                    }
                    $ffmpeg = new BashCommand("sleep 1; ffmpeg -y -i $path.avi -codec copy $newPath.mp4\n");
                    echo $ffmpeg;
                    $ffmpeg->exec();
                    //если это какой либо мжпег поток
                    if(filesize($newPath.".mp4") == 0){
                        `mv $path.avi $newPath.avi`;
                    }
                    unlink($path.".avi");*/
                    //$q_arc = "insert into archive values(0, $this->cid, '$this->pref', $now, 0, 0, 0, 'busy', 0, '$this->filename')";
                    $q_arc = "insert into archive values(0, $this->cid, '$this->pref', $now, 0, 0, 0, 'busy', 0, '$newPath')";
                    if (!$db->query($q_arc)) throw new MysqlQueryException($q_arc);

                    break;
            }
        }
    }

    /**
     *
     */
    public function stop()
    {
        $db = Database::getInstance()->getDB();
        // узнать, велась ли запись по данному файлику или нет.
        parent::stop();

        if ($this->pref == CamPrefix::RECORD) {
            //$q = "select max(id) from archive where cam_id=$this->cid and type='$this->pref'";
            $q = "select id,file from archive where cam_id=$this->cid and type='$this->pref' order by id desc limit 1";
            $r = $db->query($q);
            if (!$r) throw new MysqlQueryException($q);

            $now = time();
            $row = $r->fetch_row();
            if ($row != NULL) {
                $id = $row[0];
                $file = $row[1];
                $qu = "update archive set date_end=$now, rebuilded='no' where id=$id limit 1";
                $r = $db->query($qu);
                if (!$r) throw new MysqlQueryException($qu);
            } else {
                //нет записи в базе
            }
        }

    }
}
