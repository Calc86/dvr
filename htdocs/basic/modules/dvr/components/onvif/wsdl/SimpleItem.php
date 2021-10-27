<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SimpleItem
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var anySimpleType $Value
     */
    protected $Value = null;

    /**
     * @param string $Name
     * @param anySimpleType $Value
     */
    public function __construct($Name, $Value)
    {
      $this->Name = $Name;
      $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \app\modules\dvr\components\onvif\wsdl\SimpleItem
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return anySimpleType
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param anySimpleType $Value
     * @return \app\modules\dvr\components\onvif\wsdl\SimpleItem
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
