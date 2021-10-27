<?php

namespace app\modules\dvr\components\onvif\wsdl;

class HostnameInformation
{

    /**
     * @var boolean $FromDHCP
     */
    protected $FromDHCP = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var HostnameInformationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param boolean $FromDHCP
     */
    public function __construct($FromDHCP)
    {
      $this->FromDHCP = $FromDHCP;
    }

    /**
     * @return boolean
     */
    public function getFromDHCP()
    {
      return $this->FromDHCP;
    }

    /**
     * @param boolean $FromDHCP
     * @return \app\modules\dvr\components\onvif\wsdl\HostnameInformation
     */
    public function setFromDHCP($FromDHCP)
    {
      $this->FromDHCP = $FromDHCP;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \app\modules\dvr\components\onvif\wsdl\HostnameInformation
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return HostnameInformationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param HostnameInformationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\HostnameInformation
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
