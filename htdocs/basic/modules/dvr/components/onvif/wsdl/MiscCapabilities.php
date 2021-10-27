<?php

namespace app\modules\dvr\components\onvif\wsdl;

class MiscCapabilities
{

    /**
     * @var StringAttrList $AuxiliaryCommands
     */
    protected $AuxiliaryCommands = null;

    /**
     * @param StringAttrList $AuxiliaryCommands
     */
    public function __construct($AuxiliaryCommands)
    {
      $this->AuxiliaryCommands = $AuxiliaryCommands;
    }

    /**
     * @return StringAttrList
     */
    public function getAuxiliaryCommands()
    {
      return $this->AuxiliaryCommands;
    }

    /**
     * @param StringAttrList $AuxiliaryCommands
     * @return \app\modules\dvr\components\onvif\wsdl\MiscCapabilities
     */
    public function setAuxiliaryCommands($AuxiliaryCommands)
    {
      $this->AuxiliaryCommands = $AuxiliaryCommands;
      return $this;
    }

}
