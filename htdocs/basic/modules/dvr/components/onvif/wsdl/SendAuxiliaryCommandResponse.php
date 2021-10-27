<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SendAuxiliaryCommandResponse
{

    /**
     * @var AuxiliaryData $AuxiliaryCommandResponse
     */
    protected $AuxiliaryCommandResponse = null;

    /**
     * @param AuxiliaryData $AuxiliaryCommandResponse
     */
    public function __construct($AuxiliaryCommandResponse)
    {
      $this->AuxiliaryCommandResponse = $AuxiliaryCommandResponse;
    }

    /**
     * @return AuxiliaryData
     */
    public function getAuxiliaryCommandResponse()
    {
      return $this->AuxiliaryCommandResponse;
    }

    /**
     * @param AuxiliaryData $AuxiliaryCommandResponse
     * @return \app\modules\dvr\components\onvif\wsdl\SendAuxiliaryCommandResponse
     */
    public function setAuxiliaryCommandResponse($AuxiliaryCommandResponse)
    {
      $this->AuxiliaryCommandResponse = $AuxiliaryCommandResponse;
      return $this;
    }

}
