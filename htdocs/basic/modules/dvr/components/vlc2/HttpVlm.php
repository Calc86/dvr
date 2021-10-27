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
class HttpVlm extends Vlm
{
    private const VLM_COMMAND_URL = 'requests/vlm_cmd.xml?command=';

    protected string $scheme = 'http';
    protected string $host;
    protected int $port;
    protected string $url = self::VLM_COMMAND_URL;

    protected Config $config;

    public function __construct(string $camName, string $host, int $port)
    {
        parent::__construct($camName);

        $this->config = new Config();   // todo 20211027
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
//            'user' => '',
//            'password' => $this->config->httpPassword,
        ];

        $fullUrl = '{scheme}://{host}:{port}/{url}';
        //var_dump(Helpers::applyParams($params, $fullUrl)); die();
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

        $client = new Client();
        //$request->headers->set('Authorization', 'Basic ' . base64_encode("$username:$password"));
        $auth = 'Basic ' . base64_encode(":".$this->config->httpPassword);

        try {
            $response = $client->createRequest()
                ->setMethod('GET')
                ->setUrl($this->getFullUrl().rawurlencode($command))
                ->setOptions(['timeout' => 5])
                //->setFormat("application/json")
                ->addHeaders([
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                    'Authorization' => $auth,
                ])
                ->send();
            $this->return = $response->content;
            $this->log($this->return);
            //$client->cre
            //Todo 2014**** в будущих реализациях VLC (2.1.4 и далее) требуется авторизация.
            //$this->return = file_get_contents($this->getFullUrl() . rawurlencode($command));
            //todo 20211027 use normal http client !!
        } catch (Exception $e) {
            $this->log($e->getMessage());
            /*echo $e->getMessage()."\n";
            echo $e->getFile()." ".$e->getLine()."\n";*/
            $this->return = 'error';
        }
    }
}
