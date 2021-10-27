<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Transport
{

    /**
     * @var TransportProtocol $Protocol
     */
    protected $Protocol = null;

    /**
     * @var Transport $Tunnel
     */
    protected $Tunnel = null;

    /**
     * @param TransportProtocol $Protocol
     */
    public function __construct($Protocol)
    {
      $this->Protocol = $Protocol;
    }

    /**
     * @return TransportProtocol
     */
    public function getProtocol()
    {
      return $this->Protocol;
    }

    /**
     * @param TransportProtocol $Protocol
     * @return \app\modules\dvr\components\onvif\wsdl\Transport
     */
    public function setProtocol($Protocol)
    {
      $this->Protocol = $Protocol;
      return $this;
    }

    /**
     * @return Transport
     */
    public function getTunnel()
    {
      return $this->Tunnel;
    }

    /**
     * @param Transport $Tunnel
     * @return \app\modules\dvr\components\onvif\wsdl\Transport
     */
    public function setTunnel($Tunnel)
    {
      $this->Tunnel = $Tunnel;
      return $this;
    }

}
