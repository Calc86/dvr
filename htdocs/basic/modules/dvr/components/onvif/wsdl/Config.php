<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Config
{

    /**
     * @var ItemList $Parameters
     */
    protected $Parameters = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var QName $Type
     */
    protected $Type = null;

    /**
     * @param ItemList $Parameters
     * @param string $Name
     * @param QName $Type
     */
    public function __construct($Parameters, $Name, $Type)
    {
      $this->Parameters = $Parameters;
      $this->Name = $Name;
      $this->Type = $Type;
    }

    /**
     * @return ItemList
     */
    public function getParameters()
    {
      return $this->Parameters;
    }

    /**
     * @param ItemList $Parameters
     * @return \app\modules\dvr\components\onvif\wsdl\Config
     */
    public function setParameters($Parameters)
    {
      $this->Parameters = $Parameters;
      return $this;
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
     * @return \app\modules\dvr\components\onvif\wsdl\Config
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return QName
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param QName $Type
     * @return \app\modules\dvr\components\onvif\wsdl\Config
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
