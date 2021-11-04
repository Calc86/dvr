<?php

namespace dvr\system\common;

use yii\base\Model;

/**
 *
 */
class Telnet extends Model
{
    /** @var resource|\Socket
     * @noinspection PhpFullyQualifiedNameUsageInspection
     */
    protected $connection;
    /** @var int Таймер ожидания после каждой операции */
    protected int $wait = 1000;
    public string $host;
    public int $port;
    protected int $readBufSize = 10 * 1024;
    protected bool $template = true;

    protected const NEW_LINE = "\r\n";

    public function __construct(string $host, int $port)
    {
        parent::__construct();

        $this->host = $host;
        $this->port = $port;
    }


    protected function wait()
    {
        usleep($this->wait);
    }

    /**
     * @param string $host
     * @param int $port
     * @return bool
     * @throws SystemException
     */
    public function connect(): bool
    {
        $this->connection = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        if ($this->connection === false) {
            throw new SystemException("can not open socket: " . socket_last_error());
        }
        //socket_set_nonblock($this->f);
        //var_dump($this->f); die();
        //socket_set_timeout($this->f, 10);
        $result = socket_connect($this->connection, $this->host, $this->port);
        if ($result === false) {
            throw new SystemException("can not open socket: " . socket_last_error());
        }

        $this->wait();
        $this->read();
        return (!!$this->connection);
    }
//
//    /**
//     * Авторизация только по паролю, в vlc нет пользователя
//     * @param $pass string пароль
//     */
//    public function auth(string $pass)
//    {
//        $this->write($pass);
////        $result = socket_write($this->f, $pass . "\r\n");
////        if($result === false) {
////            throw new \Exception("can not open socket: ".socket_last_error());
////        }
//        $this->wait();
//        //$this->read();
//    }

    /**
     * @return string
     * @throws SystemException
     */
    protected function read(): string
    {
        $buf = socket_read($this->connection, $this->readBufSize);
        if ($buf === false) {
            throw new SystemException("can not open socket: " . socket_last_error());
        }
        return $buf;
    }

    /**
     * @param string $cmd
     * @return string
     * @throws SystemException
     */
    public function write(string $cmd): string
    {
        $result = socket_write($this->connection, $cmd . self::NEW_LINE);
        if ($result === false) {
            throw new SystemException("can not open socket: " . socket_last_error());
        }
        $this->wait();
        return $this->read();
    }

    public function disconnect()
    {
        //$this->write('quit');
        socket_close($this->connection);
    }
}
