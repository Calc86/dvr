<?php

namespace app\modules\dvr\components\onvif\wsdl;

class NetworkGateway
{

    /**
     * @var IPv4Address[] $IPv4Address
     */
    protected $IPv4Address = null;

    /**
     * @var IPv6Address[] $IPv6Address
     */
    protected $IPv6Address = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return IPv4Address[]
     */
    public function getIPv4Address()
    {
      return $this->IPv4Address;
    }

    /**
     * @param IPv4Address[] $IPv4Address
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkGateway
     */
    public function setIPv4Address(array $IPv4Address = null)
    {
      $this->IPv4Address = $IPv4Address;
      return $this;
    }

    /**
     * @return IPv6Address[]
     */
    public function getIPv6Address()
    {
      return $this->IPv6Address;
    }

    /**
     * @param IPv6Address[] $IPv6Address
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkGateway
     */
    public function setIPv6Address(array $IPv6Address = null)
    {
      $this->IPv6Address = $IPv6Address;
      return $this;
    }

}
