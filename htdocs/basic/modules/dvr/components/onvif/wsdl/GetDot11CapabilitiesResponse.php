<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetDot11CapabilitiesResponse
{

    /**
     * @var Dot11Capabilities $Capabilities
     */
    protected $Capabilities = null;

    /**
     * @param Dot11Capabilities $Capabilities
     */
    public function __construct($Capabilities)
    {
      $this->Capabilities = $Capabilities;
    }

    /**
     * @return Dot11Capabilities
     */
    public function getCapabilities()
    {
      return $this->Capabilities;
    }

    /**
     * @param Dot11Capabilities $Capabilities
     * @return \app\modules\dvr\components\onvif\wsdl\GetDot11CapabilitiesResponse
     */
    public function setCapabilities($Capabilities)
    {
      $this->Capabilities = $Capabilities;
      return $this;
    }

}
