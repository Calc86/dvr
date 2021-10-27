<?php

namespace app\modules\dvr\components\onvif\wsdl;

class DynamicDNSInformation
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
     * @var DynamicDNSInformationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param DynamicDNSType $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
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
     * @return \app\modules\dvr\components\onvif\wsdl\DynamicDNSInformation
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
     * @return \app\modules\dvr\components\onvif\wsdl\DynamicDNSInformation
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
     * @return \app\modules\dvr\components\onvif\wsdl\DynamicDNSInformation
     */
    public function setTTL($TTL)
    {
      $this->TTL = $TTL;
      return $this;
    }

    /**
     * @return DynamicDNSInformationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param DynamicDNSInformationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\DynamicDNSInformation
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
