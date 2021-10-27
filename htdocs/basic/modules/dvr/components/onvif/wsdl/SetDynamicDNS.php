<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetDynamicDNS
{

    /**
     * @var DynamicDNSType $Type
     */
    protected $Type = null;

    /**
     * @var DNSName $Name
     */
    protected $Name = null;

    /**
     * @var duration $TTL
     */
    protected $TTL = null;

    /**
     * @param DynamicDNSType $Type
     * @param DNSName $Name
     * @param duration $TTL
     */
    public function __construct($Type, $Name, $TTL)
    {
      $this->Type = $Type;
      $this->Name = $Name;
      $this->TTL = $TTL;
    }

    /**
     * @return DynamicDNSType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param DynamicDNSType $Type
     * @return \app\modules\dvr\components\onvif\wsdl\SetDynamicDNS
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return DNSName
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param DNSName $Name
     * @return \app\modules\dvr\components\onvif\wsdl\SetDynamicDNS
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return duration
     */
    public function getTTL()
    {
      return $this->TTL;
    }

    /**
     * @param duration $TTL
     * @return \app\modules\dvr\components\onvif\wsdl\SetDynamicDNS
     */
    public function setTTL($TTL)
    {
      $this->TTL = $TTL;
      return $this;
    }

}
