<?php

namespace app\modules\dvr\components\onvif\wsdl;

class NetworkInterface extends DeviceEntity
{

    /**
     * @var boolean $Enabled
     */
    protected $Enabled = null;

    /**
     * @var NetworkInterfaceInfo $Info
     */
    protected $Info = null;

    /**
     * @var NetworkInterfaceLink $Link
     */
    protected $Link = null;

    /**
     * @var IPv4NetworkInterface $IPv4
     */
    protected $IPv4 = null;

    /**
     * @var IPv6NetworkInterface $IPv6
     */
    protected $IPv6 = null;

    /**
     * @var NetworkInterfaceExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param ReferenceToken $token
     * @param boolean $Enabled
     */
    public function __construct($token, $Enabled)
    {
      parent::__construct($token);
      $this->Enabled = $Enabled;
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
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterface
     */
    public function setEnabled($Enabled)
    {
      $this->Enabled = $Enabled;
      return $this;
    }

    /**
     * @return NetworkInterfaceInfo
     */
    public function getInfo()
    {
      return $this->Info;
    }

    /**
     * @param NetworkInterfaceInfo $Info
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterface
     */
    public function setInfo($Info)
    {
      $this->Info = $Info;
      return $this;
    }

    /**
     * @return NetworkInterfaceLink
     */
    public function getLink()
    {
      return $this->Link;
    }

    /**
     * @param NetworkInterfaceLink $Link
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterface
     */
    public function setLink($Link)
    {
      $this->Link = $Link;
      return $this;
    }

    /**
     * @return IPv4NetworkInterface
     */
    public function getIPv4()
    {
      return $this->IPv4;
    }

    /**
     * @param IPv4NetworkInterface $IPv4
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterface
     */
    public function setIPv4($IPv4)
    {
      $this->IPv4 = $IPv4;
      return $this;
    }

    /**
     * @return IPv6NetworkInterface
     */
    public function getIPv6()
    {
      return $this->IPv6;
    }

    /**
     * @param IPv6NetworkInterface $IPv6
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterface
     */
    public function setIPv6($IPv6)
    {
      $this->IPv6 = $IPv6;
      return $this;
    }

    /**
     * @return NetworkInterfaceExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param NetworkInterfaceExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterface
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
