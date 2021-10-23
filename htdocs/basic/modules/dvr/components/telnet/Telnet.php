<?php

namespace app\modules\dvr\components\telnet;

class Telnet
{
    /**
     * @var resource
     */
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
     */
    public function connect(string $host, int $port): bool
    {
        $err_no = 0;
        $err_str = '';
        @$this->f = fsockopen($host, $port, $err_no, $err_str, 1);
        $this->wait();
        if ($this->f) {
            stream_set_timeout($this->f, 1);
        }
        return (!!$this->f);
    }

    /**
     * Авторизация только по паролю, в vlc нет пользователя
     * @param $pass string пароль
     */
    public function auth(string $pass)
    {
        fputs($this->f, $pass . "\r\n");
        $this->wait();

    }

    public function read(): string
    {
        $buf = '';
        while (($ln = fread($this->f, 128)) != 0)   // todo ?? 20211022 file_get_content
            $buf .= $ln;
        return $buf;
    }

    /**
     * @param $cmd
     */
    public function write($cmd)
    {
        fputs($this->f, $cmd . "\r\n");
        $this->wait();
    }
}
