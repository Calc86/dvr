<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 18:19
 */

namespace app\modules\dvr\components\common;

use app\modules\dvr\components\interfaces\ICamSettings;

/**
 * Основные настройки, которые необходимы для нашей системы
 * Class CamSettings
 * @package system2
 */
class CamSettings implements ICamSettings
{
    protected int $id = 0;
    protected string $liveProto = 'http';
    protected string $stopProto = 'http';
    protected ?string $ip = 'localhost';
    protected ?string $livePort = '1111';
    protected string $stopPort = '1111';
    protected string $livePath = '';
    protected string $stopPath = '';

    /**
     * @return string
     */
    public function getLiveProto(): string
    {
        return $this->liveProto;
    }

    /**
     * @return string
     */
    public function getStopProto(): string
    {
        return $this->stopProto;
    }

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @return int
     */
    public function getID(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLivePort(): string
    {
        return $this->livePort;
    }

    /**
     * @return string
     */
    public function getStopPort(): string
    {
        return $this->stopPort;
    }

    /**
     * @return string
     */
    public function getLivePath(): string
    {
        return $this->livePath;
    }

    /**
     * @return string
     */
    public function getStopPath(): string
    {
        return $this->stopPath;
    }

    /**
     * Возвращает полную ссылку на stop поток или stop кадр
     * @return string
     */
    public function getStopUrl(): string
    {
        return "$this->stopProto://$this->ip:$this->stopPort/$this->stopPath";
    }

    /**
     * Возвращает полную ссылку на live поток
     * @return string
     */
    public function getLiveUrl(): string
    {
        //multicast support
        $ip = $this->ip;
        $a = explode('.', $ip);
        if ($a[0] >= 224) $ip = '@' . $ip;

        if ($this->liveProto == 'file')
            return "$this->liveProto://$this->livePath";
        return "$this->liveProto://$ip:$this->livePort/$this->livePath";
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @param string|null $ip
     */
    public function setIp(?string $ip)
    {
        $this->ip = $ip;
    }

    /**
     * @param string $livePath
     */
    public function setLivePath(string $livePath)
    {
        $this->livePath = $livePath;
    }

    /**
     * @param string|null $livePort
     */
    public function setLivePort(?string $livePort)
    {
        $this->livePort = $livePort;
    }

    /**
     * @param string $liveProto
     */
    public function setLiveProto(string $liveProto)
    {
        $this->liveProto = $liveProto;
    }

    /**
     * @param string $stopPath
     */
    public function setStopPath(string $stopPath)
    {
        $this->stopPath = $stopPath;
    }

    /**
     * @param string $stopPort
     */
    public function setStopPort(string $stopPort)
    {
        $this->stopPort = $stopPort;
    }

    /**
     * @param string $stopProto
     */
    public function setStopProto(string $stopProto)
    {
        $this->stopProto = $stopProto;
    }

}
