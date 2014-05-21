<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.04.14
 * Time: 17:21
 */

namespace system2;


/**
 * Class Lock
 * @package system2
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

        Log::getInstance()->put(__FUNCTION__, __CLASS__."-".$this->fName);

        $this->path = Path::getTmpfsPath(Path::LOCKS)."/".$this->fName;
    }

    /**
     * @return bool
     */
    public function create(){
        Log::getInstance()->put(__FUNCTION__, __CLASS__."-".$this->fName);
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
        Log::getInstance()->put(__FUNCTION__, __CLASS__."-".$this->fName);
        if(file_exists($this->path))
            unlink($this->path);
    }

    /**
     *
     */
    public static function resetAll(){
        Log::getInstance()->put(__FUNCTION__, __CLASS__);
        $reset = new \BashCommand("ls ".Path::getTmpfsPath(Path::LOCKS)."/*".Lock::EXTENSION." | xargs rm");
        $reset->exec();
    }

    /**
     * @param $maxTimeout
     * @return bool seconds
     */
    public function wait($maxTimeout){
        Log::getInstance()->put(__FUNCTION__, __CLASS__."-".$this->fName);
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

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
}
