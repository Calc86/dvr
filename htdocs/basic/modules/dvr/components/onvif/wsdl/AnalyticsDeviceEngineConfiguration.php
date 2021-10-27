<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AnalyticsDeviceEngineConfiguration
{

    /**
     * @var EngineConfiguration[] $EngineConfiguration
     */
    protected $EngineConfiguration = null;

    /**
     * @var AnalyticsDeviceEngineConfigurationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param EngineConfiguration[] $EngineConfiguration
     */
    public function __construct(array $EngineConfiguration)
    {
      $this->EngineConfiguration = $EngineConfiguration;
    }

    /**
     * @return EngineConfiguration[]
     */
    public function getEngineConfiguration()
    {
      return $this->EngineConfiguration;
    }

    /**
     * @param EngineConfiguration[] $EngineConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsDeviceEngineConfiguration
     */
    public function setEngineConfiguration(array $EngineConfiguration)
    {
      $this->EngineConfiguration = $EngineConfiguration;
      return $this;
    }

    /**
     * @return AnalyticsDeviceEngineConfigurationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param AnalyticsDeviceEngineConfigurationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsDeviceEngineConfiguration
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
