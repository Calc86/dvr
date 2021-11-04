<?php

namespace dvr\system\vlc;

use dvr\system\common\SystemException;
use dvr\system\common\Telnet;

/**
 * TODO check prompt from vlc after auth
 */
class VlcTelnet extends Telnet
{
    const DEFAULT = 'vlc_telnet_default';

    public string $password;

    /**
     * Авторизация только по паролю, в vlc нет пользователя
     *
     * @param $pass string|null пароль
     * @throws SystemException
     */
    public function auth(?string $pass = null): string
    {
        if(empty($pass)) $pass = $this->password;
        return $this->write($pass);
    }

    public function copy(?string $host, int $port) : self
    {
        $telnet = new static();
        $telnet->host = $host;
        $telnet->port = $port;
        $telnet->password = $this->password;
        return $telnet;
    }
}
