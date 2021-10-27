<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Dot11SecurityConfiguration
{

    /**
     * @var Dot11SecurityMode $Mode
     */
    protected $Mode = null;

    /**
     * @var Dot11Cipher $Algorithm
     */
    protected $Algorithm = null;

    /**
     * @var Dot11PSKSet $PSK
     */
    protected $PSK = null;

    /**
     * @var ReferenceToken $Dot1X
     */
    protected $Dot1X = null;

    /**
     * @var Dot11SecurityConfigurationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param Dot11SecurityMode $Mode
     */
    public function __construct($Mode)
    {
      $this->Mode = $Mode;
    }

    /**
     * @return Dot11SecurityMode
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param Dot11SecurityMode $Mode
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11SecurityConfiguration
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return Dot11Cipher
     */
    public function getAlgorithm()
    {
      return $this->Algorithm;
    }

    /**
     * @param Dot11Cipher $Algorithm
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11SecurityConfiguration
     */
    public function setAlgorithm($Algorithm)
    {
      $this->Algorithm = $Algorithm;
      return $this;
    }

    /**
     * @return Dot11PSKSet
     */
    public function getPSK()
    {
      return $this->PSK;
    }

    /**
     * @param Dot11PSKSet $PSK
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11SecurityConfiguration
     */
    public function setPSK($PSK)
    {
      $this->PSK = $PSK;
      return $this;
    }

    /**
     * @return ReferenceToken
     */
    public function getDot1X()
    {
      return $this->Dot1X;
    }

    /**
     * @param ReferenceToken $Dot1X
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11SecurityConfiguration
     */
    public function setDot1X($Dot1X)
    {
      $this->Dot1X = $Dot1X;
      return $this;
    }

    /**
     * @return Dot11SecurityConfigurationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param Dot11SecurityConfigurationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11SecurityConfiguration
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
