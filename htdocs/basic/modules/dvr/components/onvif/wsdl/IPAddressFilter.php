<?php

namespace app\modules\dvr\components\onvif\wsdl;

class IPAddressFilter
{

    /**
     * @var IPAddressFilterType $Type
     */
    protected $Type = null;

    /**
     * @var PrefixedIPv4Address[] $IPv4Address
     */
    protected $IPv4Address = null;

    /**
     * @var PrefixedIPv6Address[] $IPv6Address
     */
    protected $IPv6Address = null;

    /**
     * @var IPAddressFilterExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param IPAddressFilterType $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return IPAddressFilterType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param IPAddressFilterType $Type
     * @return \app\modules\dvr\components\onvif\wsdl\IPAddressFilter
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return PrefixedIPv4Address[]
     */
    public function getIPv4Address()
    {
      return $this->IPv4Address;
    }

    /**
     * @param PrefixedIPv4Address[] $IPv4Address
     * @return \app\modules\dvr\components\onvif\wsdl\IPAddressFilter
     */
    public function setIPv4Address(array $IPv4Address = null)
    {
      $this->IPv4Address = $IPv4Address;
      return $this;
    }

    /**
     * @return PrefixedIPv6Address[]
     */
    public function getIPv6Address()
    {
      return $this->IPv6Address;
    }

    /**
     * @param PrefixedIPv6Address[] $IPv6Address
     * @return \app\modules\dvr\components\onvif\wsdl\IPAddressFilter
     */
    public function setIPv6Address(array $IPv6Address = null)
    {
      $this->IPv6Address = $IPv6Address;
      return $this;
    }

    /**
     * @return IPAddressFilterExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param IPAddressFilterExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\IPAddressFilter
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
