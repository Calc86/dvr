<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PaneConfiguration
{

    /**
     * @var string $PaneName
     */
    protected $PaneName = null;

    /**
     * @var ReferenceToken $AudioOutputToken
     */
    protected $AudioOutputToken = null;

    /**
     * @var ReferenceToken $AudioSourceToken
     */
    protected $AudioSourceToken = null;

    /**
     * @var AudioEncoderConfiguration $AudioEncoderConfiguration
     */
    protected $AudioEncoderConfiguration = null;

    /**
     * @var ReferenceToken $ReceiverToken
     */
    protected $ReceiverToken = null;

    /**
     * @var ReferenceToken $Token
     */
    protected $Token = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ReferenceToken $Token
     * @param string $any
     */
    public function __construct($Token, $any)
    {
      $this->Token = $Token;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getPaneName()
    {
      return $this->PaneName;
    }

    /**
     * @param string $PaneName
     * @return \app\modules\dvr\components\onvif\wsdl\PaneConfiguration
     */
    public function setPaneName($PaneName)
    {
      $this->PaneName = $PaneName;
      return $this;
    }

    /**
     * @return ReferenceToken
     */
    public function getAudioOutputToken()
    {
      return $this->AudioOutputToken;
    }

    /**
     * @param ReferenceToken $AudioOutputToken
     * @return \app\modules\dvr\components\onvif\wsdl\PaneConfiguration
     */
    public function setAudioOutputToken($AudioOutputToken)
    {
      $this->AudioOutputToken = $AudioOutputToken;
      return $this;
    }

    /**
     * @return ReferenceToken
     */
    public function getAudioSourceToken()
    {
      return $this->AudioSourceToken;
    }

    /**
     * @param ReferenceToken $AudioSourceToken
     * @return \app\modules\dvr\components\onvif\wsdl\PaneConfiguration
     */
    public function setAudioSourceToken($AudioSourceToken)
    {
      $this->AudioSourceToken = $AudioSourceToken;
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
     * @return \app\modules\dvr\components\onvif\wsdl\PaneConfiguration
     */
    public function setAudioEncoderConfiguration($AudioEncoderConfiguration)
    {
      $this->AudioEncoderConfiguration = $AudioEncoderConfiguration;
      return $this;
    }

    /**
     * @return ReferenceToken
     */
    public function getReceiverToken()
    {
      return $this->ReceiverToken;
    }

    /**
     * @param ReferenceToken $ReceiverToken
     * @return \app\modules\dvr\components\onvif\wsdl\PaneConfiguration
     */
    public function setReceiverToken($ReceiverToken)
    {
      $this->ReceiverToken = $ReceiverToken;
      return $this;
    }

    /**
     * @return ReferenceToken
     */
    public function getToken()
    {
      return $this->Token;
    }

    /**
     * @param ReferenceToken $Token
     * @return \app\modules\dvr\components\onvif\wsdl\PaneConfiguration
     */
    public function setToken($Token)
    {
      $this->Token = $Token;
      return $this;
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
     * @return \app\modules\dvr\components\onvif\wsdl\PaneConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
