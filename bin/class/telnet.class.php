<?php


class telnet{
    protected $f;

    /**
     * таймер ожидания после каждой операции
     */
    protected function wait() {
        usleep(1000);
    }

    /**
     * @param $host string имя хоста
     * @param $port int порт
     * @return bool
     */
    public function connect($host,$port) {
        $err_no = 0;
        $err_str = '';
        @$this->f = fsockopen($host, $port, $err_no, $err_str, 1 );
        $this->wait();
        if($this->f){
            stream_set_timeout($this->f,1);
        }
        return (!!$this->f);
    }

    /**
     * авторизация только по паролю, в vlc нет пользователя
     * @param $pass string пароль
     */
    public function auth($pass) {
        fputs ($this->f, $pass."\r\n");
        $this->wait();
        
    }
    
    public function read() {
        $buf = '';
        while(($ln = fread($this->f,128)) != 0)
            $buf.=$ln;
        return $buf;
    }
    
    public function write($cmd) {
        fputs($this->f, $cmd."\r\n");
        $this->wait();
    }
}

