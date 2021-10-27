<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetSystemFactoryDefault
{

    /**
     * @var FactoryDefaultType $FactoryDefault
     */
    protected $FactoryDefault = null;

    /**
     * @param FactoryDefaultType $FactoryDefault
     */
    public function __construct($FactoryDefault)
    {
      $this->FactoryDefault = $FactoryDefault;
    }

    /**
     * @return FactoryDefaultType
     */
    public function getFactoryDefault()
    {
      return $this->FactoryDefault;
    }

    /**
     * @param FactoryDefaultType $FactoryDefault
     * @return \app\modules\dvr\components\onvif\wsdl\SetSystemFactoryDefault
     */
    public function setFactoryDefault($FactoryDefault)
    {
      $this->FactoryDefault = $FactoryDefault;
      return $this;
    }

}
