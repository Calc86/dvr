<?php

namespace app\modules\dvr\components\onvif\wsdl;

class DigitalInput extends DeviceEntity
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var DigitalIdleState $IdleState
     */
    protected $IdleState = null;

    /**
     * @param ReferenceToken $token
     * @param string $any
     * @param DigitalIdleState $IdleState
     */
    public function __construct($token, $any, $IdleState)
    {
      parent::__construct($token);
      $this->any = $any;
      $this->IdleState = $IdleState;
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
     * @return \app\modules\dvr\components\onvif\wsdl\DigitalInput
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return DigitalIdleState
     */
    public function getIdleState()
    {
      return $this->IdleState;
    }

    /**
     * @param DigitalIdleState $IdleState
     * @return \app\modules\dvr\components\onvif\wsdl\DigitalInput
     */
    public function setIdleState($IdleState)
    {
      $this->IdleState = $IdleState;
      return $this;
    }

}
