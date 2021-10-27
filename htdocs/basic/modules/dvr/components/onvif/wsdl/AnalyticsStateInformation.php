<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AnalyticsStateInformation
{

    /**
     * @var ReferenceToken $AnalyticsEngineControlToken
     */
    protected $AnalyticsEngineControlToken = null;

    /**
     * @var AnalyticsState $State
     */
    protected $State = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ReferenceToken $AnalyticsEngineControlToken
     * @param AnalyticsState $State
     * @param string $any
     */
    public function __construct($AnalyticsEngineControlToken, $State, $any)
    {
      $this->AnalyticsEngineControlToken = $AnalyticsEngineControlToken;
      $this->State = $State;
      $this->any = $any;
    }

    /**
     * @return ReferenceToken
     */
    public function getAnalyticsEngineControlToken()
    {
      return $this->AnalyticsEngineControlToken;
    }

    /**
     * @param ReferenceToken $AnalyticsEngineControlToken
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsStateInformation
     */
    public function setAnalyticsEngineControlToken($AnalyticsEngineControlToken)
    {
      $this->AnalyticsEngineControlToken = $AnalyticsEngineControlToken;
      return $this;
    }

    /**
     * @return AnalyticsState
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param AnalyticsState $State
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsStateInformation
     */
    public function setState($State)
    {
      $this->State = $State;
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
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsStateInformation
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
