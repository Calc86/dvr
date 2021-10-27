<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SendAuxiliaryCommand
{

    /**
     * @var AuxiliaryData $AuxiliaryCommand
     */
    protected $AuxiliaryCommand = null;

    /**
     * @param AuxiliaryData $AuxiliaryCommand
     */
    public function __construct($AuxiliaryCommand)
    {
      $this->AuxiliaryCommand = $AuxiliaryCommand;
    }

    /**
     * @return AuxiliaryData
     */
    public function getAuxiliaryCommand()
    {
      return $this->AuxiliaryCommand;
    }

    /**
     * @param AuxiliaryData $AuxiliaryCommand
     * @return \app\modules\dvr\components\onvif\wsdl\SendAuxiliaryCommand
     */
    public function setAuxiliaryCommand($AuxiliaryCommand)
    {
      $this->AuxiliaryCommand = $AuxiliaryCommand;
      return $this;
    }

}
