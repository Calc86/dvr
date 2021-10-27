<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ReplayConfiguration
{

    /**
     * @var duration $SessionTimeout
     */
    protected $SessionTimeout = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param duration $SessionTimeout
     * @param string $any
     */
    public function __construct($SessionTimeout, $any)
    {
      $this->SessionTimeout = $SessionTimeout;
      $this->any = $any;
    }

    /**
     * @return duration
     */
    public function getSessionTimeout()
    {
      return $this->SessionTimeout;
    }

    /**
     * @param duration $SessionTimeout
     * @return \app\modules\dvr\components\onvif\wsdl\ReplayConfiguration
     */
    public function setSessionTimeout($SessionTimeout)
    {
      $this->SessionTimeout = $SessionTimeout;
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
     * @return \app\modules\dvr\components\onvif\wsdl\ReplayConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
