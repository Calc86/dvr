<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ReceiverStateInformation
{

    /**
     * @var ReceiverState $State
     */
    protected $State = null;

    /**
     * @var boolean $AutoCreated
     */
    protected $AutoCreated = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ReceiverState $State
     * @param boolean $AutoCreated
     * @param string $any
     */
    public function __construct($State, $AutoCreated, $any)
    {
      $this->State = $State;
      $this->AutoCreated = $AutoCreated;
      $this->any = $any;
    }

    /**
     * @return ReceiverState
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param ReceiverState $State
     * @return \app\modules\dvr\components\onvif\wsdl\ReceiverStateInformation
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoCreated()
    {
      return $this->AutoCreated;
    }

    /**
     * @param boolean $AutoCreated
     * @return \app\modules\dvr\components\onvif\wsdl\ReceiverStateInformation
     */
    public function setAutoCreated($AutoCreated)
    {
      $this->AutoCreated = $AutoCreated;
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
     * @return \app\modules\dvr\components\onvif\wsdl\ReceiverStateInformation
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
