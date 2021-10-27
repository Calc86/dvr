<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetRelayOutputsResponse
{

    /**
     * @var RelayOutput $RelayOutputs
     */
    protected $RelayOutputs = null;

    /**
     * @param RelayOutput $RelayOutputs
     */
    public function __construct($RelayOutputs)
    {
      $this->RelayOutputs = $RelayOutputs;
    }

    /**
     * @return RelayOutput
     */
    public function getRelayOutputs()
    {
      return $this->RelayOutputs;
    }

    /**
     * @param RelayOutput $RelayOutputs
     * @return \app\modules\dvr\components\onvif\wsdl\GetRelayOutputsResponse
     */
    public function setRelayOutputs($RelayOutputs)
    {
      $this->RelayOutputs = $RelayOutputs;
      return $this;
    }

}
