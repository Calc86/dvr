<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ProfileExtension
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var AudioOutputConfiguration $AudioOutputConfiguration
     */
    protected $AudioOutputConfiguration = null;

    /**
     * @var AudioDecoderConfiguration $AudioDecoderConfiguration
     */
    protected $AudioDecoderConfiguration = null;

    /**
     * @var ProfileExtension2 $Extension
     */
    protected $Extension = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \app\modules\dvr\components\onvif\wsdl\ProfileExtension
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return AudioOutputConfiguration
     */
    public function getAudioOutputConfiguration()
    {
      return $this->AudioOutputConfiguration;
    }

    /**
     * @param AudioOutputConfiguration $AudioOutputConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\ProfileExtension
     */
    public function setAudioOutputConfiguration($AudioOutputConfiguration)
    {
      $this->AudioOutputConfiguration = $AudioOutputConfiguration;
      return $this;
    }

    /**
     * @return AudioDecoderConfiguration
     */
    public function getAudioDecoderConfiguration()
    {
      return $this->AudioDecoderConfiguration;
    }

    /**
     * @param AudioDecoderConfiguration $AudioDecoderConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\ProfileExtension
     */
    public function setAudioDecoderConfiguration($AudioDecoderConfiguration)
    {
      $this->AudioDecoderConfiguration = $AudioDecoderConfiguration;
      return $this;
    }

    /**
     * @return ProfileExtension2
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ProfileExtension2 $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\ProfileExtension
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
