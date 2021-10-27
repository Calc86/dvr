<?php

namespace app\modules\dvr\components\onvif\wsdl;

class OSDConfiguration extends DeviceEntity
{

    /**
     * @var OSDReference $VideoSourceConfigurationToken
     */
    protected $VideoSourceConfigurationToken = null;

    /**
     * @var OSDType $Type
     */
    protected $Type = null;

    /**
     * @var OSDPosConfiguration $Position
     */
    protected $Position = null;

    /**
     * @var OSDTextConfiguration $TextString
     */
    protected $TextString = null;

    /**
     * @var OSDImgConfiguration $Image
     */
    protected $Image = null;

    /**
     * @var OSDConfigurationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param ReferenceToken $token
     * @param OSDReference $VideoSourceConfigurationToken
     * @param OSDType $Type
     * @param OSDPosConfiguration $Position
     */
    public function __construct($token, $VideoSourceConfigurationToken, $Type, $Position)
    {
      parent::__construct($token);
      $this->VideoSourceConfigurationToken = $VideoSourceConfigurationToken;
      $this->Type = $Type;
      $this->Position = $Position;
    }

    /**
     * @return OSDReference
     */
    public function getVideoSourceConfigurationToken()
    {
      return $this->VideoSourceConfigurationToken;
    }

    /**
     * @param OSDReference $VideoSourceConfigurationToken
     * @return \app\modules\dvr\components\onvif\wsdl\OSDConfiguration
     */
    public function setVideoSourceConfigurationToken($VideoSourceConfigurationToken)
    {
      $this->VideoSourceConfigurationToken = $VideoSourceConfigurationToken;
      return $this;
    }

    /**
     * @return OSDType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param OSDType $Type
     * @return \app\modules\dvr\components\onvif\wsdl\OSDConfiguration
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return OSDPosConfiguration
     */
    public function getPosition()
    {
      return $this->Position;
    }

    /**
     * @param OSDPosConfiguration $Position
     * @return \app\modules\dvr\components\onvif\wsdl\OSDConfiguration
     */
    public function setPosition($Position)
    {
      $this->Position = $Position;
      return $this;
    }

    /**
     * @return OSDTextConfiguration
     */
    public function getTextString()
    {
      return $this->TextString;
    }

    /**
     * @param OSDTextConfiguration $TextString
     * @return \app\modules\dvr\components\onvif\wsdl\OSDConfiguration
     */
    public function setTextString($TextString)
    {
      $this->TextString = $TextString;
      return $this;
    }

    /**
     * @return OSDImgConfiguration
     */
    public function getImage()
    {
      return $this->Image;
    }

    /**
     * @param OSDImgConfiguration $Image
     * @return \app\modules\dvr\components\onvif\wsdl\OSDConfiguration
     */
    public function setImage($Image)
    {
      $this->Image = $Image;
      return $this;
    }

    /**
     * @return OSDConfigurationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param OSDConfigurationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\OSDConfiguration
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
