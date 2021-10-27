<?php

namespace app\modules\dvr\components\onvif\wsdl;

class NetworkInterfaceConnectionSetting
{

    /**
     * @var boolean $AutoNegotiation
     */
    protected $AutoNegotiation = null;

    /**
     * @var int $Speed
     */
    protected $Speed = null;

    /**
     * @var Duplex $Duplex
     */
    protected $Duplex = null;

    /**
     * @param boolean $AutoNegotiation
     * @param int $Speed
     * @param Duplex $Duplex
     */
    public function __construct($AutoNegotiation, $Speed, $Duplex)
    {
      $this->AutoNegotiation = $AutoNegotiation;
      $this->Speed = $Speed;
      $this->Duplex = $Duplex;
    }

    /**
     * @return boolean
     */
    public function getAutoNegotiation()
    {
      return $this->AutoNegotiation;
    }

    /**
     * @param boolean $AutoNegotiation
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceConnectionSetting
     */
    public function setAutoNegotiation($AutoNegotiation)
    {
      $this->AutoNegotiation = $AutoNegotiation;
      return $this;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
      return $this->Speed;
    }

    /**
     * @param int $Speed
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceConnectionSetting
     */
    public function setSpeed($Speed)
    {
      $this->Speed = $Speed;
      return $this;
    }

    /**
     * @return Duplex
     */
    public function getDuplex()
    {
      return $this->Duplex;
    }

    /**
     * @param Duplex $Duplex
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceConnectionSetting
     */
    public function setDuplex($Duplex)
    {
      $this->Duplex = $Duplex;
      return $this;
    }

}
