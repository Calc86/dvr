<?php

namespace app\modules\dvr\components\onvif\wsdl;

class EngineConfiguration
{

    /**
     * @var VideoAnalyticsConfiguration $VideoAnalyticsConfiguration
     */
    protected $VideoAnalyticsConfiguration = null;

    /**
     * @var AnalyticsEngineInputInfo $AnalyticsEngineInputInfo
     */
    protected $AnalyticsEngineInputInfo = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param VideoAnalyticsConfiguration $VideoAnalyticsConfiguration
     * @param AnalyticsEngineInputInfo $AnalyticsEngineInputInfo
     * @param string $any
     */
    public function __construct($VideoAnalyticsConfiguration, $AnalyticsEngineInputInfo, $any)
    {
      $this->VideoAnalyticsConfiguration = $VideoAnalyticsConfiguration;
      $this->AnalyticsEngineInputInfo = $AnalyticsEngineInputInfo;
      $this->any = $any;
    }

    /**
     * @return VideoAnalyticsConfiguration
     */
    public function getVideoAnalyticsConfiguration()
    {
      return $this->VideoAnalyticsConfiguration;
    }

    /**
     * @param VideoAnalyticsConfiguration $VideoAnalyticsConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\EngineConfiguration
     */
    public function setVideoAnalyticsConfiguration($VideoAnalyticsConfiguration)
    {
      $this->VideoAnalyticsConfiguration = $VideoAnalyticsConfiguration;
      return $this;
    }

    /**
     * @return AnalyticsEngineInputInfo
     */
    public function getAnalyticsEngineInputInfo()
    {
      return $this->AnalyticsEngineInputInfo;
    }

    /**
     * @param AnalyticsEngineInputInfo $AnalyticsEngineInputInfo
     * @return \app\modules\dvr\components\onvif\wsdl\EngineConfiguration
     */
    public function setAnalyticsEngineInputInfo($AnalyticsEngineInputInfo)
    {
      $this->AnalyticsEngineInputInfo = $AnalyticsEngineInputInfo;
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
     * @return \app\modules\dvr\components\onvif\wsdl\EngineConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
