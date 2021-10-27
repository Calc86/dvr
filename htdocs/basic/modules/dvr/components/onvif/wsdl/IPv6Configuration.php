<?php

namespace app\modules\dvr\components\onvif\wsdl;

class IPv6Configuration
{

    /**
     * @var boolean $AcceptRouterAdvert
     */
    protected $AcceptRouterAdvert = null;

    /**
     * @var IPv6DHCPConfiguration $DHCP
     */
    protected $DHCP = null;

    /**
     * @var PrefixedIPv6Address[] $Manual
     */
    protected $Manual = null;

    /**
     * @var PrefixedIPv6Address[] $LinkLocal
     */
    protected $LinkLocal = null;

    /**
     * @var PrefixedIPv6Address[] $FromDHCP
     */
    protected $FromDHCP = null;

    /**
     * @var PrefixedIPv6Address[] $FromRA
     */
    protected $FromRA = null;

    /**
     * @var IPv6ConfigurationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param IPv6DHCPConfiguration $DHCP
     */
    public function __construct($DHCP)
    {
      $this->DHCP = $DHCP;
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
     * @return \app\modules\dvr\components\onvif\wsdl\IPv6Configuration
     */
    public function setAcceptRouterAdvert($AcceptRouterAdvert)
    {
      $this->AcceptRouterAdvert = $AcceptRouterAdvert;
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
     * @return \app\modules\dvr\components\onvif\wsdl\IPv6Configuration
     */
    public function setDHCP($DHCP)
    {
      $this->DHCP = $DHCP;
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
     * @return \app\modules\dvr\components\onvif\wsdl\IPv6Configuration
     */
    public function setManual(array $Manual = null)
    {
      $this->Manual = $Manual;
      return $this;
    }

    /**
     * @return PrefixedIPv6Address[]
     */
    public function getLinkLocal()
    {
      return $this->LinkLocal;
    }

    /**
     * @param PrefixedIPv6Address[] $LinkLocal
     * @return \app\modules\dvr\components\onvif\wsdl\IPv6Configuration
     */
    public function setLinkLocal(array $LinkLocal = null)
    {
      $this->LinkLocal = $LinkLocal;
      return $this;
    }

    /**
     * @return PrefixedIPv6Address[]
     */
    public function getFromDHCP()
    {
      return $this->FromDHCP;
    }

    /**
     * @param PrefixedIPv6Address[] $FromDHCP
     * @return \app\modules\dvr\components\onvif\wsdl\IPv6Configuration
     */
    public function setFromDHCP(array $FromDHCP = null)
    {
      $this->FromDHCP = $FromDHCP;
      return $this;
    }

    /**
     * @return PrefixedIPv6Address[]
     */
    public function getFromRA()
    {
      return $this->FromRA;
    }

    /**
     * @param PrefixedIPv6Address[] $FromRA
     * @return \app\modules\dvr\components\onvif\wsdl\IPv6Configuration
     */
    public function setFromRA(array $FromRA = null)
    {
      $this->FromRA = $FromRA;
      return $this;
    }

    /**
     * @return IPv6ConfigurationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param IPv6ConfigurationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\IPv6Configuration
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
