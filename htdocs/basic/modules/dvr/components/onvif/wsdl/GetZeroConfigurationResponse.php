<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetZeroConfigurationResponse
{

    /**
     * @var NetworkZeroConfiguration $ZeroConfiguration
     */
    protected $ZeroConfiguration = null;

    /**
     * @param NetworkZeroConfiguration $ZeroConfiguration
     */
    public function __construct($ZeroConfiguration)
    {
      $this->ZeroConfiguration = $ZeroConfiguration;
    }

    /**
     * @return NetworkZeroConfiguration
     */
    public function getZeroConfiguration()
    {
      return $this->ZeroConfiguration;
    }

    /**
     * @param NetworkZeroConfiguration $ZeroConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\GetZeroConfigurationResponse
     */
    public function setZeroConfiguration($ZeroConfiguration)
    {
      $this->ZeroConfiguration = $ZeroConfiguration;
      return $this;
    }

}
