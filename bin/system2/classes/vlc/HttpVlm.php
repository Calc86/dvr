<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 16:35
 */

namespace system2;

/**
 * HTTP interface for vlm
 * Class HttpVlm
 * @package system2
 */
class HttpVlm extends Vlm{
    protected $ip;
    protected $port;
    protected $url;

    /**
     * @param $camName
     * @param $ip
     * @param $port
     */
    public function __construct($camName, $ip, $port)
    {
        parent::__construct($camName);

        $this->ip = $ip;
        $this->port = $port;
        $this->url = 'requests/vlm_cmd.xml?command=';
    }

    /**
     * @return string
     */
    public function getReturn(){
        return $this->return;
    }

    /**
     * @return string
     */
    protected function getFullUrl(){
        return "http://{$this->ip}:{$this->port}/{$this->url}";
    }

    /**
     * @param $command
     * @return mixed|void
     */
    protected function _execute($command){
        $this->return = '';

        try{
            $this->return = file_get_contents($this->getFullUrl().rawurlencode($command));
        }catch (\Exception $e){
            $this->log($e->getMessage());
            /*echo $e->getMessage()."\n";
            echo $e->getFile()." ".$e->getLine()."\n";*/
            $this->return = 'error';
        }
    }
}
