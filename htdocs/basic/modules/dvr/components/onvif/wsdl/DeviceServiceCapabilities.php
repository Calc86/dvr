<?php

namespace app\modules\dvr\components\onvif\wsdl;

class DeviceServiceCapabilities
{

    /**
     * @var NetworkCapabilities $Network
     */
    protected $Network = null;

    /**
     * @var SecurityCapabilities $Security
     */
    protected $Security = null;

    /**
     * @var SystemCapabilities $System
     */
    protected $System = null;

    /**
     * @var MiscCapabilities $Misc
     */
    protected $Misc = null;

    /**
     * @param NetworkCapabilities $Network
     * @param SecurityCapabilities $Security
     * @param SystemCapabilities $System
     */
    public function __construct($Network, $Security, $System)
    {
      $this->Network = $Network;
      $this->Security = $Security;
      $this->System = $System;
    }

    /**
     * @return NetworkCapabilities
     */
    public function getNetwork()
    {
      return $this->Network;
    }

    /**
     * @param NetworkCapabilities $Network
     * @return \app\modules\dvr\components\onvif\wsdl\DeviceServiceCapabilities
     */
    public function setNetwork($Network)
    {
      $this->Network = $Network;
      return $this;
    }

    /**
     * @return SecurityCapabilities
     */
    public function getSecurity()
    {
      return $this->Security;
    }

    /**
     * @param SecurityCapabilities $Security
     * @return \app\modules\dvr\components\onvif\wsdl\DeviceServiceCapabilities
     */
    public function setSecurity($Security)
    {
      $this->Security = $Security;
      return $this;
    }

    /**
     * @return SystemCapabilities
     */
    public function getSystem()
    {
      return $this->System;
    }

    /**
     * @param SystemCapabilities $System
     * @return \app\modules\dvr\components\onvif\wsdl\DeviceServiceCapabilities
     */
    public function setSystem($System)
    {
      $this->System = $System;
      return $this;
    }

    /**
     * @return MiscCapabilities
     */
    public function getMisc()
    {
      return $this->Misc;
    }

    /**
     * @param MiscCapabilities $Misc
     * @return \app\modules\dvr\components\onvif\wsdl\DeviceServiceCapabilities
     */
    public function setMisc($Misc)
    {
      $this->Misc = $Misc;
      return $this;
    }

}
