<?php

namespace app\modules\dvr\components\telnet;

use app\modules\dvr\components\common\Log;

class Telnet2
{

    protected $f;

    /**
     * Таймер ожидания после каждой операции
     */
    protected function wait()
    {
        usleep(1000);
    }

    /**
     * @param $host string Имя хоста
     * @param $port int порт
     * @return bool
     * @throws \Exception
     */
    public function connect(string $host, int $port): bool
    {
        $this->f = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        if($this->f === false) {
            throw new \Exception("can not open socket: ".socket_last_error());
        }
        //socket_set_nonblock($this->f);
        //var_dump($this->f); die();
        //socket_set_timeout($this->f, 10);
        $result = socket_connect($this->f, $host, $port);
        if($result === false) {
            throw new \Exception("can not open socket: ".socket_last_error());
        }

        $this->wait();
        $this->read();
        return (!!$this->f);
    }

    /**
     * Авторизация только по паролю, в vlc нет пользователя
     * @param $pass string пароль
     * @throws \Exception
     */
    public function auth(string $pass)
    {
        $this->write($pass);
//        $result = socket_write($this->f, $pass . "\r\n");
//        if($result === false) {
//            throw new \Exception("can not open socket: ".socket_last_error());
//        }
        $this->wait();
        //$this->read();
    }

    protected function read(): string  //todo 20211027 not working
    {
        $buf = socket_read($this->f, 10240);
        if($buf === false) {
            throw new \Exception("can not open socket: ".socket_last_error());
        }
        return $buf;
    }

    /**
     * @param $cmd
     * @return string
     * @throws \Exception
     */
    public function write($cmd)
    {
        $result = socket_write($this->f, $cmd . "\r\n");
        if($result === false) {
            throw new \Exception("can not open socket: ".socket_last_error());
        }
        $this->wait();
        return $this->read();
    }

    /**
     * @throws \Exception
     */
    public function disconnect() {
        //$this->write('quit');
        socket_close($this->f);
    }
}
