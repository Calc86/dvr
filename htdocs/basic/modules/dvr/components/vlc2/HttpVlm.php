<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 16:35
 */

namespace app\modules\dvr\components\vlc2;

use app\modules\dvr\components\Helpers;
use Exception;

/**
 * HTTP interface for vlm
 *
 * https://wiki.videolan.org/VLC_HTTP_requests/
 * vlm_cmd.xml:
 * < execute VLM command <cmd>
 * ?command=<cmd>
 * > get the error message from <cmd>
 */
class HttpVlm extends Vlm
{
    private const VLM_COMMAND_URL = 'requests/vlm_cmd.xml?command=';

    protected string $scheme = 'http';
    protected string $host;
    protected int $port;
    protected string $url = self::VLM_COMMAND_URL;

    public function __construct(string $camName, string $host, int $port)
    {
        parent::__construct($camName);

        $this->host = $host;
        $this->port = $port;
    }

    public function getReturn(): string
    {
        return $this->return;
    }

    protected function getFullUrl(): string
    {
        $params = [
            'scheme' => $this->scheme,
            'host' => $this->host,
            'port' => $this->port,
            'url' => $this->url,
        ];
        $fullUrl = '{scheme}://{host}:{port}/{url}';
        return Helpers::applyParams($params, $fullUrl);
        //return "http://$this->host:$this->port/$this->url";
    }

    /**
     * @param $command
     * @return void
     */
    protected function _execute($command)
    {
        $this->return = '';

        try {
            //Todo 2014**** в будущих реализациях VLC (2.1.4 и далее) требуется авторизация.
            $this->return = file_get_contents($this->getFullUrl() . rawurlencode($command));
        } catch (Exception $e) {
            $this->log($e->getMessage());
            /*echo $e->getMessage()."\n";
            echo $e->getFile()." ".$e->getLine()."\n";*/
            $this->return = 'error';
        }
    }
}
