<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 14.05.14
 * Time: 18:19
 */

namespace system2;

/**
 * Основные настройки, которые необходимы для нашей системы
 * Class CamSettings
 * @package system2
 */
class CamSettings implements ICamSettings{
    protected $id = 0;
    protected $liveProto = 'http';
    protected $stopProto = 'http';
    protected $ip = 'localhost';
    protected $livePort = '1111';
    protected $stopPort = '1111';
    protected $livePath = '';
    protected $stopPath = '';

    /**
     * @return string
     */
    public function getLiveProto()
    {
        return $this->liveProto;
    }

    /**
     * @return string
     */
    public function getStopProto()
    {
        return $this->stopProto;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @return int
     */
    public function getID()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLivePort()
    {
        return $this->livePort;
    }

    /**
     * @return string
     */
    public function getStopPort()
    {
        return $this->stopPort;
    }

    /**
     * @return string
     */
    public function getLivePath()
    {
        return $this->livePath;
    }

    /**
     * @return string
     */
    public function getStopPath()
    {
        return $this->stopPath;
    }

    /**
     * Возвращает полную ссылку на stop поток или stop кадр
     * @return string
     */
    public function getStopUrl()
    {
        return "{$this->stopProto}://{$this->ip}:{$this->stopPort}/{$this->stopPath}";
    }

    /**
     * Возвращает полную ссылку на live поток
     * @return string
     */
    public function getLiveUrl()
    {
        //multicast support
        $ip = $this->ip;
        $a = explode('.', $ip);
        if($a[0] >= 224) $ip = '@'.$ip;

        if($this->liveProto == 'file')
            return "{$this->liveProto}://{$this->livePath}";
        return "{$this->liveProto}://{$ip}:{$this->livePort}/{$this->livePath}";
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * @param string $livePath
     */
    public function setLivePath($livePath)
    {
        $this->livePath = $livePath;
    }

    /**
     * @param string $livePort
     */
    public function setLivePort($livePort)
    {
        $this->livePort = $livePort;
    }

    /**
     * @param string $liveProto
     */
    public function setLiveProto($liveProto)
    {
        $this->liveProto = $liveProto;
    }

    /**
     * @param string $stopPath
     */
    public function setStopPath($stopPath)
    {
        $this->stopPath = $stopPath;
    }

    /**
     * @param string $stopPort
     */
    public function setStopPort($stopPort)
    {
        $this->stopPort = $stopPort;
    }

    /**
     * @param string $stopProto
     */
    public function setStopProto($stopProto)
    {
        $this->stopProto = $stopProto;
    }

}
