<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetRelayOutputState
{

    /**
     * @var ReferenceToken $RelayOutputToken
     */
    protected $RelayOutputToken = null;

    /**
     * @var RelayLogicalState $LogicalState
     */
    protected $LogicalState = null;

    /**
     * @param ReferenceToken $RelayOutputToken
     * @param RelayLogicalState $LogicalState
     */
    public function __construct($RelayOutputToken, $LogicalState)
    {
      $this->RelayOutputToken = $RelayOutputToken;
      $this->LogicalState = $LogicalState;
    }

    /**
     * @return ReferenceToken
     */
    public function getRelayOutputToken()
    {
      return $this->RelayOutputToken;
    }

    /**
     * @param ReferenceToken $RelayOutputToken
     * @return \app\modules\dvr\components\onvif\wsdl\SetRelayOutputState
     */
    public function setRelayOutputToken($RelayOutputToken)
    {
      $this->RelayOutputToken = $RelayOutputToken;
      return $this;
    }

    /**
     * @return RelayLogicalState
     */
    public function getLogicalState()
    {
      return $this->LogicalState;
    }

    /**
     * @param RelayLogicalState $LogicalState
     * @return \app\modules\dvr\components\onvif\wsdl\SetRelayOutputState
     */
    public function setLogicalState($LogicalState)
    {
      $this->LogicalState = $LogicalState;
      return $this;
    }

}
