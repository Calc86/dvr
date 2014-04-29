<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.04.14
 * Time: 17:21
 */

namespace system;


/**
 * Class Lock
 * @package system
 */
class Lock {
    private $path;
    private $fName;

    const EXTENSION = '.lock';

    /**
     * @param string $fName filename/function name/ __FUNCTION__
     */
    function __construct($fName)
    {
        $this->fName = $fName.Lock::EXTENSION;
        $this->path = Lock::getWorkDir()."/".$this->fName;
    }

    /**
     * @return bool
     */
    public function create(){
        if(file_exists($this->path)){
            Log::getInstance()->put($this->fName);
            return false;
        }
        $f = fopen($this->path, "w+");
        fclose($f);
        return true;
    }

    /**
     *
     */
    public function delete(){
        if(file_exists($this->path))
            unlink($this->path);
    }

    /**
     * @return string
     */
    public static function getWorkDir(){
        return TMP;
    }

    /**
     *
     */
    public static function resetAll(){
        $reset = new \BashCommand("ls ".Lock::getWorkDir()."/*".Lock::EXTENSION." | xargs rm");
        $reset->exec();
    }

    /**
     * @param $maxTimeout
     * @return bool seconds
     */
    public function wait($maxTimeout){
        $wait = 0;
        while(1){
            if(file_exists($this->path)){
                sleep(1); $wait ++;
            }
            else
                return true;
            if($wait > $maxTimeout)
                return false;
        }
        return false;
    }
}
