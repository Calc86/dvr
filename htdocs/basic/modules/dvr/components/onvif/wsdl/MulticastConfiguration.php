<?php

namespace app\modules\dvr\components\onvif\wsdl;

class MulticastConfiguration
{

    /**
     * @var IPAddress $Address
     */
    protected $Address = null;

    /**
     * @var int $Port
     */
    protected $Port = null;

    /**
     * @var int $TTL
     */
    protected $TTL = null;

    /**
     * @var boolean $AutoStart
     */
    protected $AutoStart = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param IPAddress $Address
     * @param int $Port
     * @param int $TTL
     * @param boolean $AutoStart
     * @param string $any
     */
    public function __construct($Address, $Port, $TTL, $AutoStart, $any)
    {
      $this->Address = $Address;
      $this->Port = $Port;
      $this->TTL = $TTL;
      $this->AutoStart = $AutoStart;
      $this->any = $any;
    }

    /**
     * @return IPAddress
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param IPAddress $Address
     * @return \app\modules\dvr\components\onvif\wsdl\MulticastConfiguration
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return int
     */
    public function getPort()
    {
      return $this->Port;
    }

    /**
     * @param int $Port
     * @return \app\modules\dvr\components\onvif\wsdl\MulticastConfiguration
     */
    public function setPort($Port)
    {
      $this->Port = $Port;
      return $this;
    }

    /**
     * @return int
     */
    public function getTTL()
    {
      return $this->TTL;
    }

    /**
     * @param int $TTL
     * @return \app\modules\dvr\components\onvif\wsdl\MulticastConfiguration
     */
    public function setTTL($TTL)
    {
      $this->TTL = $TTL;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoStart()
    {
      return $this->AutoStart;
    }

    /**
     * @param boolean $AutoStart
     * @return \app\modules\dvr\components\onvif\wsdl\MulticastConfiguration
     */
    public function setAutoStart($AutoStart)
    {
      $this->AutoStart = $AutoStart;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \app\modules\dvr\components\onvif\wsdl\MulticastConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
