<?php

namespace app\modules\dvr\components\onvif\wsdl;

class NetworkInterfaceInfo
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var HwAddress $HwAddress
     */
    protected $HwAddress = null;

    /**
     * @var int $MTU
     */
    protected $MTU = null;

    /**
     * @param HwAddress $HwAddress
     */
    public function __construct($HwAddress)
    {
      $this->HwAddress = $HwAddress;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return HwAddress
     */
    public function getHwAddress()
    {
      return $this->HwAddress;
    }

    /**
     * @param HwAddress $HwAddress
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceInfo
     */
    public function setHwAddress($HwAddress)
    {
      $this->HwAddress = $HwAddress;
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
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkInterfaceInfo
     */
    public function setMTU($MTU)
    {
      $this->MTU = $MTU;
      return $this;
    }

}
