<?php

namespace app\modules\dvr\components\onvif\wsdl;

class IPv6NetworkInterfaceSetConfiguration
{

    /**
     * @var boolean $Enabled
     */
    protected $Enabled = null;

    /**
     * @var boolean $AcceptRouterAdvert
     */
    protected $AcceptRouterAdvert = null;

    /**
     * @var PrefixedIPv6Address[] $Manual
     */
    protected $Manual = null;

    /**
     * @var IPv6DHCPConfiguration $DHCP
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
     * @return \app\modules\dvr\components\onvif\wsdl\IPv6NetworkInterfaceSetConfiguration
     */
    public function setEnabled($Enabled)
    {
      $this->Enabled = $Enabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAcceptRouterAdvert()
    {
      return $this->AcceptRouterAdvert;
    }

    /**
     * @param boolean $AcceptRouterAdvert
     * @return \app\modules\dvr\components\onvif\wsdl\IPv6NetworkInterfaceSetConfiguration
     */
    public function setAcceptRouterAdvert($AcceptRouterAdvert)
    {
      $this->AcceptRouterAdvert = $AcceptRouterAdvert;
      return $this;
    }

    /**
     * @return PrefixedIPv6Address[]
     */
    public function getManual()
    {
      return $this->Manual;
    }

    /**
     * @param PrefixedIPv6Address[] $Manual
     * @return \app\modules\dvr\components\onvif\wsdl\IPv6NetworkInterfaceSetConfiguration
     */
    public function setManual(array $Manual = null)
    {
      $this->Manual = $Manual;
      return $this;
    }

    /**
     * @return IPv6DHCPConfiguration
     */
    public function getDHCP()
    {
      return $this->DHCP;
    }

    /**
     * @param IPv6DHCPConfiguration $DHCP
     * @return \app\modules\dvr\components\onvif\wsdl\IPv6NetworkInterfaceSetConfiguration
     */
    public function setDHCP($DHCP)
    {
      $this->DHCP = $DHCP;
      return $this;
    }

}
