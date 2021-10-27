<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetServiceCapabilitiesResponse
{

    /**
     * @var DeviceServiceCapabilities $Capabilities
     */
    protected $Capabilities = null;

    /**
     * @param DeviceServiceCapabilities $Capabilities
     */
    public function __construct($Capabilities)
    {
      $this->Capabilities = $Capabilities;
    }

    /**
     * @return DeviceServiceCapabilities
     */
    public function getCapabilities()
    {
      return $this->Capabilities;
    }

    /**
     * @param DeviceServiceCapabilities $Capabilities
     * @return \app\modules\dvr\components\onvif\wsdl\GetServiceCapabilitiesResponse
     */
    public function setCapabilities($Capabilities)
    {
      $this->Capabilities = $Capabilities;
      return $this;
    }

}
