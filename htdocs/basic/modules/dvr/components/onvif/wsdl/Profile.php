<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Profile
{

    /**
     * @var Name $Name
     */
    protected $Name = null;

    /**
     * @var VideoSourceConfiguration $VideoSourceConfiguration
     */
    protected $VideoSourceConfiguration = null;

    /**
     * @var AudioSourceConfiguration $AudioSourceConfiguration
     */
    protected $AudioSourceConfiguration = null;

    /**
     * @var VideoEncoderConfiguration $VideoEncoderConfiguration
     */
    protected $VideoEncoderConfiguration = null;

    /**
     * @var AudioEncoderConfiguration $AudioEncoderConfiguration
     */
    protected $AudioEncoderConfiguration = null;

    /**
     * @var VideoAnalyticsConfiguration $VideoAnalyticsConfiguration
     */
    protected $VideoAnalyticsConfiguration = null;

    /**
     * @var PTZConfiguration $PTZConfiguration
     */
    protected $PTZConfiguration = null;

    /**
     * @var MetadataConfiguration $MetadataConfiguration
     */
    protected $MetadataConfiguration = null;

    /**
     * @var ProfileExtension $Extension
     */
    protected $Extension = null;

    /**
     * @var ReferenceToken $token
     */
    protected $token = null;

    /**
     * @var boolean $fixed
     */
    protected $fixed = null;

    /**
     * @param Name $Name
     * @param ReferenceToken $token
     * @param boolean $fixed
     */
    public function __construct($Name, $token, $fixed)
    {
      $this->Name = $Name;
      $this->token = $token;
      $this->fixed = $fixed;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \app\modules\dvr\components\onvif\wsdl\Profile
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return VideoSourceConfiguration
     */
    public function getVideoSourceConfiguration()
    {
      return $this->VideoSourceConfiguration;
    }

    /**
     * @param VideoSourceConfiguration $VideoSourceConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\Profile
     */
    public function setVideoSourceConfiguration($VideoSourceConfiguration)
    {
      $this->VideoSourceConfiguration = $VideoSourceConfiguration;
      return $this;
    }

    /**
     * @return AudioSourceConfiguration
     */
    public function getAudioSourceConfiguration()
    {
      return $this->AudioSourceConfiguration;
    }

    /**
     * @param AudioSourceConfiguration $AudioSourceConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\Profile
     */
    public function setAudioSourceConfiguration($AudioSourceConfiguration)
    {
      $this->AudioSourceConfiguration = $AudioSourceConfiguration;
      return $this;
    }

    /**
     * @return VideoEncoderConfiguration
     */
    public function getVideoEncoderConfiguration()
    {
      return $this->VideoEncoderConfiguration;
    }

    /**
     * @param VideoEncoderConfiguration $VideoEncoderConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\Profile
     */
    public function setVideoEncoderConfiguration($VideoEncoderConfiguration)
    {
      $this->VideoEncoderConfiguration = $VideoEncoderConfiguration;
      return $this;
    }

    /**
     * @return AudioEncoderConfiguration
     */
    public function getAudioEncoderConfiguration()
    {
      return $this->AudioEncoderConfiguration;
    }

    /**
     * @param AudioEncoderConfiguration $AudioEncoderConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\Profile
     */
    public function setAudioEncoderConfiguration($AudioEncoderConfiguration)
    {
      $this->AudioEncoderConfiguration = $AudioEncoderConfiguration;
      return $this;
    }

    /**
     * @return VideoAnalyticsConfiguration
     */
    public function getVideoAnalyticsConfiguration()
    {
      return $this->VideoAnalyticsConfiguration;
    }

    /**
     * @param VideoAnalyticsConfiguration $VideoAnalyticsConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\Profile
     */
    public function setVideoAnalyticsConfiguration($VideoAnalyticsConfiguration)
    {
      $this->VideoAnalyticsConfiguration = $VideoAnalyticsConfiguration;
      return $this;
    }

    /**
     * @return PTZConfiguration
     */
    public function getPTZConfiguration()
    {
      return $this->PTZConfiguration;
    }

    /**
     * @param PTZConfiguration $PTZConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\Profile
     */
    public function setPTZConfiguration($PTZConfiguration)
    {
      $this->PTZConfiguration = $PTZConfiguration;
      return $this;
    }

    /**
     * @return MetadataConfiguration
     */
    public function getMetadataConfiguration()
    {
      return $this->MetadataConfiguration;
    }

    /**
     * @param MetadataConfiguration $MetadataConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\Profile
     */
    public function setMetadataConfiguration($MetadataConfiguration)
    {
      $this->MetadataConfiguration = $MetadataConfiguration;
      return $this;
    }

    /**
     * @return ProfileExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ProfileExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\Profile
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return ReferenceToken
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param ReferenceToken $token
     * @return \app\modules\dvr\components\onvif\wsdl\Profile
     */
    public function setToken($token)
    {
      $this->token = $token;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFixed()
    {
      return $this->fixed;
    }

    /**
     * @param boolean $fixed
     * @return \app\modules\dvr\components\onvif\wsdl\Profile
     */
    public function setFixed($fixed)
    {
      $this->fixed = $fixed;
      return $this;
    }

}
