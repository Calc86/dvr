<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetCapabilitiesResponse
{

    /**
     * @var Capabilities $Capabilities
     */
    protected $Capabilities = null;

    /**
     * @param Capabilities $Capabilities
     */
    public function __construct($Capabilities)
    {
      $this->Capabilities = $Capabilities;
    }

    /**
     * @return Capabilities
     */
    public function getCapabilities()
    {
      return $this->Capabilities;
    }

    /**
     * @param Capabilities $Capabilities
     * @return \app\modules\dvr\components\onvif\wsdl\GetCapabilitiesResponse
     */
    public function setCapabilities($Capabilities)
    {
      $this->Capabilities = $Capabilities;
      return $this;
    }

}
