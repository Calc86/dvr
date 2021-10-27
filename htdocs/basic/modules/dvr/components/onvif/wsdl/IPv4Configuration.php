<?php

namespace app\modules\dvr\components\onvif\wsdl;

class IPv4Configuration
{

    /**
     * @var PrefixedIPv4Address[] $Manual
     */
    protected $Manual = null;

    /**
     * @var PrefixedIPv4Address $LinkLocal
     */
    protected $LinkLocal = null;

    /**
     * @var PrefixedIPv4Address $FromDHCP
     */
    protected $FromDHCP = null;

    /**
     * @var boolean $DHCP
     */
    protected $DHCP = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $DHCP
     * @param string $any
     */
    public function __construct($DHCP, $any)
    {
      $this->DHCP = $DHCP;
      $this->any = $any;
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
     * @return \app\modules\dvr\components\onvif\wsdl\IPv4Configuration
     */
    public function setManual(array $Manual = null)
    {
      $this->Manual = $Manual;
      return $this;
    }

    /**
     * @return PrefixedIPv4Address
     */
    public function getLinkLocal()
    {
      return $this->LinkLocal;
    }

    /**
     * @param PrefixedIPv4Address $LinkLocal
     * @return \app\modules\dvr\components\onvif\wsdl\IPv4Configuration
     */
    public function setLinkLocal($LinkLocal)
    {
      $this->LinkLocal = $LinkLocal;
      return $this;
    }

    /**
     * @return PrefixedIPv4Address
     */
    public function getFromDHCP()
    {
      return $this->FromDHCP;
    }

    /**
     * @param PrefixedIPv4Address $FromDHCP
     * @return \app\modules\dvr\components\onvif\wsdl\IPv4Configuration
     */
    public function setFromDHCP($FromDHCP)
    {
      $this->FromDHCP = $FromDHCP;
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
     * @return \app\modules\dvr\components\onvif\wsdl\IPv4Configuration
     */
    public function setDHCP($DHCP)
    {
      $this->DHCP = $DHCP;
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
     * @return \app\modules\dvr\components\onvif\wsdl\IPv4Configuration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
