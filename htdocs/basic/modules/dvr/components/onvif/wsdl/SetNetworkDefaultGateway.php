<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetNetworkDefaultGateway
{

    /**
     * @var IPv4Address $IPv4Address
     */
    protected $IPv4Address = null;

    /**
     * @var IPv6Address $IPv6Address
     */
    protected $IPv6Address = null;

    /**
     * @param IPv4Address $IPv4Address
     * @param IPv6Address $IPv6Address
     */
    public function __construct($IPv4Address, $IPv6Address)
    {
      $this->IPv4Address = $IPv4Address;
      $this->IPv6Address = $IPv6Address;
    }

    /**
     * @return IPv4Address
     */
    public function getIPv4Address()
    {
      return $this->IPv4Address;
    }

    /**
     * @param IPv4Address $IPv4Address
     * @return \app\modules\dvr\components\onvif\wsdl\SetNetworkDefaultGateway
     */
    public function setIPv4Address($IPv4Address)
    {
      $this->IPv4Address = $IPv4Address;
      return $this;
    }

    /**
     * @return IPv6Address
     */
    public function getIPv6Address()
    {
      return $this->IPv6Address;
    }

    /**
     * @param IPv6Address $IPv6Address
     * @return \app\modules\dvr\components\onvif\wsdl\SetNetworkDefaultGateway
     */
    public function setIPv6Address($IPv6Address)
    {
      $this->IPv6Address = $IPv6Address;
      return $this;
    }

}
