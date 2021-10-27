<?php

namespace app\modules\dvr\components\onvif\wsdl;

class NetworkInterfaceSetConfiguration
{

    /**
     * @var boolean $Enabled
     */
    protected $Enabled = null;

    /**
     * @var NetworkInterfaceConnectionSetting $Link
     */
    protected $Link = null;

    /**
     * @var int $MTU
     */
    protected $MTU = null;

    /**
     * @var IPv4NetworkInterfaceSetConfiguration $IPv4
     */
    protected $IPv4 = null;

    /**
     * @var IPv6NetworkInterfaceSetConfiguration $IPv6
     */
    protected $IPv6 = null;

    /**
     * @var NetworkInterfaceSetConfigurationExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getEnabled()
    {
      return $this->Enabled;
    }

    /**
     * @param boolean $Enabled
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceSetConfiguration
     */
    public function setEnabled($Enabled)
    {
      $this->Enabled = $Enabled;
      return $this;
    }

    /**
     * @return NetworkInterfaceConnectionSetting
     */
    public function getLink()
    {
      return $this->Link;
    }

    /**
     * @param NetworkInterfaceConnectionSetting $Link
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceSetConfiguration
     */
    public function setLink($Link)
    {
      $this->Link = $Link;
      return $this;
    }

    /**
     * @return int
     */
    public function getMTU()
    {
      return $this->MTU;
    }

    /**
     * @param int $MTU
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceSetConfiguration
     */
    public function setMTU($MTU)
    {
      $this->MTU = $MTU;
      return $this;
    }

    /**
     * @return IPv4NetworkInterfaceSetConfiguration
     */
    public function getIPv4()
    {
      return $this->IPv4;
    }

    /**
     * @param IPv4NetworkInterfaceSetConfiguration $IPv4
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceSetConfiguration
     */
    public function setIPv4($IPv4)
    {
      $this->IPv4 = $IPv4;
      return $this;
    }

    /**
     * @return IPv6NetworkInterfaceSetConfiguration
     */
    public function getIPv6()
    {
      return $this->IPv6;
    }

    /**
     * @param IPv6NetworkInterfaceSetConfiguration $IPv6
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceSetConfiguration
     */
    public function setIPv6($IPv6)
    {
      $this->IPv6 = $IPv6;
      return $this;
    }

    /**
     * @return NetworkInterfaceSetConfigurationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param NetworkInterfaceSetConfigurationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceSetConfiguration
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
