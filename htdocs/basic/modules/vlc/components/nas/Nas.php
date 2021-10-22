<?php

namespace app\modules\vlc\components\nas;

use app\modules\vlc\types\BashCommand;
use app\modules\vlc\types\BashResult;
use app\modules\vlc\types\IP;
use app\modules\vlc\types\Path;
use app\modules\vlc\types\YesNo;

/**
 *
 * Created by PhpStorm.
 * управление NAS
 * User: calc
 * Date: 05.03.14
 * Time: 17:51
 *
 * in fstab
 * 10.154.28.40:/mnt/raid1/mx/video /home/vlc/vlc/mount nfs auto,users 0 0
 */
class Nas
{
    /**
     * @var IP
     */
    protected $ip;
    /**
     * @var Path
     */
    protected $path;

    /**
     *
     */
    public function __construct()
    {
        $this->ip = new IP(NAS_HOST);
        $this->path = new Path(NAS_PATH);
    }

    public function mount()
    {
        //mount -t nfs nas1.xsrv.ru:/mnt/raid1/mx/video /mnt/nas
        if (!$this->is_mount())
            (new BashCommand('mount /home/vlc/vlc/mount'))->exec();
        if ($this->is_mount()) {
            //примонтированы
            $this->bind(new Path('/home/vlc/vlc/rec'));
            $this->bind(new Path('/home/vlc/vlc/mtn'));
            $this->bind(new Path('/home/vlc/vlc/tmp'));
        }
    }

    public function un_mount()
    {
        if ($this->is_mount()) {
            $this->unbind(new Path('/home/vlc/vlc/rec'));
            $this->unbind(new Path('/home/vlc/vlc/mtn'));
            $this->unbind(new Path('/home/vlc/vlc/tmp'));
        }
        if ($this->is_mount())
            (new BashCommand('umount /home/vlc/vlc/mount/'))->exec();
    }

    /**
     * @return YesNo
     */
    public function is_mount(): YesNo
    {
        //$mount = `mount | grep $this->ip | grep -v rec | grep -v mtn | grep -v tmp | wc -l`;
        //return (int) $mount;    //0 or 1
        return new YesNo(
            boolval(
                (new BashCommand("mount | grep $this->ip | grep -v rec | grep -v mtn | grep -v tmp | wc -l"))->exec()
            )
        );
    }

    /**
     * @param Path $path
     * @return BashResult
     */
    protected function bind(Path $path): BashResult
    {
        if (!$this->is_bind($path))
            return (new BashCommand("mount $path"))->exec();
        return new BashResult("");
    }


    /**
     * @param Path $path
     * @return BashResult
     */
    protected function unbind(Path $path): BashResult
    {
        if ($this->is_bind($path))
            return (new BashCommand("umount $path"))->exec();
        return new BashResult("");
    }

    /**
     * @param $path
     * @return YesNo
     */
    protected function is_bind($path): YesNo
    {
        return new YesNo(
            boolval(
                (new BashCommand("mount | grep $this->ip | grep $path | wc -l"))->exec()
            )
        );
    }
}
