<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AnalyticsEngine extends ConfigurationEntity
{

    /**
     * @var AnalyticsDeviceEngineConfiguration $AnalyticsEngineConfiguration
     */
    protected $AnalyticsEngineConfiguration = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param Name $Name
     * @param int $UseCount
     * @param ReferenceToken $token
     * @param AnalyticsDeviceEngineConfiguration $AnalyticsEngineConfiguration
     * @param string $any
     */
    public function __construct($Name, $UseCount, $token, $AnalyticsEngineConfiguration, $any)
    {
      parent::__construct($Name, $UseCount, $token);
      $this->AnalyticsEngineConfiguration = $AnalyticsEngineConfiguration;
      $this->any = $any;
    }

    /**
     * @return AnalyticsDeviceEngineConfiguration
     */
    public function getAnalyticsEngineConfiguration()
    {
      return $this->AnalyticsEngineConfiguration;
    }

    /**
     * @param AnalyticsDeviceEngineConfiguration $AnalyticsEngineConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsEngine
     */
    public function setAnalyticsEngineConfiguration($AnalyticsEngineConfiguration)
    {
      $this->AnalyticsEngineConfiguration = $AnalyticsEngineConfiguration;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsEngine
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
