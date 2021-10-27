<?php

namespace app\modules\dvr\components\onvif\wsdl;

class faultcode
{

    /**
     * @var faultcodeEnum $Value
     */
    protected $Value = null;

    /**
     * @var subcode $Subcode
     */
    protected $Subcode = null;

    /**
     * @param faultcodeEnum $Value
     */
    public function __construct($Value)
    {
      $this->Value = $Value;
    }

    /**
     * @return faultcodeEnum
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param faultcodeEnum $Value
     * @return \app\modules\dvr\components\onvif\wsdl\faultcode
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return subcode
     */
    public function getSubcode()
    {
      return $this->Subcode;
    }

    /**
     * @param subcode $Subcode
     * @return \app\modules\dvr\components\onvif\wsdl\faultcode
     */
    public function setSubcode($Subcode)
    {
      $this->Subcode = $Subcode;
      return $this;
    }

}
