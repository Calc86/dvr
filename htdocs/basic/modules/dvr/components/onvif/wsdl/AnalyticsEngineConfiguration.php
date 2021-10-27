<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AnalyticsEngineConfiguration
{

    /**
     * @var Config[] $AnalyticsModule
     */
    protected $AnalyticsModule = null;

    /**
     * @var AnalyticsEngineConfigurationExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Config[]
     */
    public function getAnalyticsModule()
    {
      return $this->AnalyticsModule;
    }

    /**
     * @param Config[] $AnalyticsModule
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsEngineConfiguration
     */
    public function setAnalyticsModule(array $AnalyticsModule = null)
    {
      $this->AnalyticsModule = $AnalyticsModule;
      return $this;
    }

    /**
     * @return AnalyticsEngineConfigurationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param AnalyticsEngineConfigurationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsEngineConfiguration
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
