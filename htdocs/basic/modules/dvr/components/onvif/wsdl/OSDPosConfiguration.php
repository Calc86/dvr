<?php

namespace app\modules\dvr\components\onvif\wsdl;

class OSDPosConfiguration
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var Vector $Pos
     */
    protected $Pos = null;

    /**
     * @var OSDPosConfigurationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param string $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \app\modules\dvr\components\onvif\wsdl\OSDPosConfiguration
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return Vector
     */
    public function getPos()
    {
      return $this->Pos;
    }

    /**
     * @param Vector $Pos
     * @return \app\modules\dvr\components\onvif\wsdl\OSDPosConfiguration
     */
    public function setPos($Pos)
    {
      $this->Pos = $Pos;
      return $this;
    }

    /**
     * @return OSDPosConfigurationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param OSDPosConfigurationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\OSDPosConfiguration
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
