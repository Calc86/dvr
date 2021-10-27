<?php

namespace app\modules\dvr\components\onvif\wsdl;

class NetworkHost
{

    /**
     * @var NetworkHostType $Type
     */
    protected $Type = null;

    /**
     * @var IPv4Address $IPv4Address
     */
    protected $IPv4Address = null;

    /**
     * @var IPv6Address $IPv6Address
     */
    protected $IPv6Address = null;

    /**
     * @var DNSName $DNSname
     */
    protected $DNSname = null;

    /**
     * @var NetworkHostExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param NetworkHostType $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return NetworkHostType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param NetworkHostType $Type
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkHost
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
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
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkHost
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
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkHost
     */
    public function setIPv6Address($IPv6Address)
    {
      $this->IPv6Address = $IPv6Address;
      return $this;
    }

    /**
     * @return DNSName
     */
    public function getDNSname()
    {
      return $this->DNSname;
    }

    /**
     * @param DNSName $DNSname
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkHost
     */
    public function setDNSname($DNSname)
    {
      $this->DNSname = $DNSname;
      return $this;
    }

    /**
     * @return NetworkHostExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param NetworkHostExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkHost
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
