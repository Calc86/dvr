<?php
/**
 * Created by PhpStorm.
 * управление NAS
 * User: calc
 * Date: 05.03.14
 * Time: 17:51
 */

//in fstab
// 10.154.28.40:/mnt/raid1/mx/video /home/vlc/vlc/mount nfs auto,users 0 0


class nas{
    protected $ip;
    protected $path;
    public function __construct(){
        $this->ip = NAS_HOST;
        $this->path = NAS_PATH;
    }

    public function mount(){
        //mount -t nfs nas1.xsrv.ru:/mnt/raid1/mx/video /mnt/nas
        if(!$this->is_mount())
            `mount /home/vlc/vlc/mount/`;
        if($this->is_mount()){
            //примонтированы
            $this->bind('/home/vlc/vlc/rec');
            $this->bind('/home/vlc/vlc/mtn');
            $this->bind('/home/vlc/vlc/tmp');
        }
    }

    public function un_mount(){
        if($this->is_mount()){
            $this->unbind('/home/vlc/vlc/rec');
            $this->unbind('/home/vlc/vlc/mtn');
            $this->unbind('/home/vlc/vlc/tmp');
        }
        if($this->is_mount())
            `umount /home/vlc/vlc/mount/`;
    }

    public function is_mount(){
        $nas = NAS_HOST;
        $mount = `mount | grep $this->ip | grep -v rec | grep -v mtn | grep -v tmp | wc -l`;
        return (int) $mount;    //0 or 1
    }

    protected  function bind($path){
        if(!$this->is_bind($path))
            `mount $path`;
    }

    protected  function unbind($path){
        if($this->is_bind($path))
            `umount $path`;
    }

    protected  function is_bind($path){
        $mount = `mount | grep $this->ip | grep $path | wc -l`;
        return (int) $mount;    //0 or 1
    }

}
