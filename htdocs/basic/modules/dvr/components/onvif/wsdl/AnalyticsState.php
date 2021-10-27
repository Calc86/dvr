<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AnalyticsState
{

    /**
     * @var string $Error
     */
    protected $Error = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $State
     * @param string $any
     */
    public function __construct($State, $any)
    {
      $this->State = $State;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getError()
    {
      return $this->Error;
    }

    /**
     * @param string $Error
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsState
     */
    public function setError($Error)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsState
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
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsState
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
