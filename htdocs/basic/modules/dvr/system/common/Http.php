<?php

namespace dvr\system\common;

use yii\base\InvalidConfigException;
use yii\base\Model;
use yii\httpclient\Client;
use yii\httpclient\Exception;

/**
 * Make http request
 */
class Http extends Model
{
    protected string $baseUrl;
    protected Client $client;
    protected int $timeout = 5;
    protected ?Auth $auth;

    /**
     * @param $path
     * @return string|null
     * @throws InvalidConfigException
     * @throws Exception
     */
    public function get($path): ?string
    {
        $auth = 'Basic ' . base64_encode(
            ($this->auth ?? "")
            . ":"
            . ($this->auth->password ?? "")
        );
        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
        if($auth != ':') $headers['Authorization'] = $auth;

        $response = $this->client->createRequest()
            ->setMethod('GET')
            ->setUrl($this->baseUrl . $path)
            ->setOptions(['timeout' => $this->timeout])
            //->setFormat("application/json")
            ->addHeaders($headers)
            ->send();
        return $response->content;
    }
}