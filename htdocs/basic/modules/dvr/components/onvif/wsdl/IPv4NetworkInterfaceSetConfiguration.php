<?php

namespace app\modules\dvr\components\onvif\wsdl;

class IPv4NetworkInterfaceSetConfiguration
{

    /**
     * @var boolean $Enabled
     */
    protected $Enabled = null;

    /**
     * @var PrefixedIPv4Address[] $Manual
     */
    protected $Manual = null;

    /**
     * @var boolean $DHCP
     */
    protected $DHCP = null;

    
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
     * @return \app\modules\dvr\components\onvif\wsdl\IPv4NetworkInterfaceSetConfiguration
     */
    public function setEnabled($Enabled)
    {
      $this->Enabled = $Enabled;
      return $this;
    }

    /**
     * @return PrefixedIPv4Address[]
     */
    public function getManual()
    {
      return $this->Manual;
    }

    /**
     * @param PrefixedIPv4Address[] $Manual
     * @return \app\modules\dvr\components\onvif\wsdl\IPv4NetworkInterfaceSetConfiguration
     */
    public function setManual(array $Manual = null)
    {
      $this->Manual = $Manual;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDHCP()
    {
      return $this->DHCP;
    }

    /**
     * @param boolean $DHCP
     * @return \app\modules\dvr\components\onvif\wsdl\IPv4NetworkInterfaceSetConfiguration
     */
    public function setDHCP($DHCP)
    {
      $this->DHCP = $DHCP;
      return $this;
    }

}
