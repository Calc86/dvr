<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 16:35
 */

namespace app\modules\dvr\components\vlc2;

use app\modules\dvr\components\Helpers;
use app\modules\dvr\components\telnet\Telnet;
use Exception;
use yii\httpclient\Client;

/**
 * HTTP interface for vlm
 *
 * not working in VLC 3.0.16 Vetinari http://localhost:8101/vlm.html return lua/intf/http.lua:92: attempt to index a nil value
 *
 * https://wiki.videolan.org/VLC_HTTP_requests/
 * vlm_cmd.xml:
 * < execute VLM command <cmd>
 * ?command=<cmd>
 * > get the error message from <cmd>
 */
class TelnetVlm extends Vlm
{
    protected Telnet $telnet;
    protected string $scheme = 'http';
    protected string $host;
    protected int $port;
    protected string $password;

    protected Config $config;

    public function __construct(string $camName, string $host, int $port)
    {
        parent::__construct($camName);

        $this->telnet = new Telnet();
        $this->config = new Config();   // todo 20211027
        $this->host = $host;
        $this->port = $port;
        $this->password = $this->config->telnetPassword;
    }

    public function getReturn(): string
    {
        return $this->return;
    }

    /**
     * @param $command
     * @return void
     */
    protected function _execute($command)
    {
        $this->return = '';

        $this->telnet->connect($this->host, $this->port);
        $this->telnet->auth($this->password);
        $this->telnet->write($command);
        $this->telnet->disconnect();
    }
}
