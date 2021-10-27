<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetDot1XConfigurationResponse
{

    /**
     * @var Dot1XConfiguration $Dot1XConfiguration
     */
    protected $Dot1XConfiguration = null;

    /**
     * @param Dot1XConfiguration $Dot1XConfiguration
     */
    public function __construct($Dot1XConfiguration)
    {
      $this->Dot1XConfiguration = $Dot1XConfiguration;
    }

    /**
     * @return Dot1XConfiguration
     */
    public function getDot1XConfiguration()
    {
      return $this->Dot1XConfiguration;
    }

    /**
     * @param Dot1XConfiguration $Dot1XConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\GetDot1XConfigurationResponse
     */
    public function setDot1XConfiguration($Dot1XConfiguration)
    {
      $this->Dot1XConfiguration = $Dot1XConfiguration;
      return $this;
    }

}
