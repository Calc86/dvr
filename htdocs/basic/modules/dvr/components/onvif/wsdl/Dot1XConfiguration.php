<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Dot1XConfiguration
{

    /**
     * @var ReferenceToken $Dot1XConfigurationToken
     */
    protected $Dot1XConfigurationToken = null;

    /**
     * @var string $Identity
     */
    protected $Identity = null;

    /**
     * @var string $AnonymousID
     */
    protected $AnonymousID = null;

    /**
     * @var int $EAPMethod
     */
    protected $EAPMethod = null;

    /**
     * @var token[] $CACertificateID
     */
    protected $CACertificateID = null;

    /**
     * @var EAPMethodConfiguration $EAPMethodConfiguration
     */
    protected $EAPMethodConfiguration = null;

    /**
     * @var Dot1XConfigurationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param ReferenceToken $Dot1XConfigurationToken
     * @param string $Identity
     * @param int $EAPMethod
     */
    public function __construct($Dot1XConfigurationToken, $Identity, $EAPMethod)
    {
      $this->Dot1XConfigurationToken = $Dot1XConfigurationToken;
      $this->Identity = $Identity;
      $this->EAPMethod = $EAPMethod;
    }

    /**
     * @return ReferenceToken
     */
    public function getDot1XConfigurationToken()
    {
      return $this->Dot1XConfigurationToken;
    }

    /**
     * @param ReferenceToken $Dot1XConfigurationToken
     * @return \app\modules\dvr\components\onvif\wsdl\Dot1XConfiguration
     */
    public function setDot1XConfigurationToken($Dot1XConfigurationToken)
    {
      $this->Dot1XConfigurationToken = $Dot1XConfigurationToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentity()
    {
      return $this->Identity;
    }

    /**
     * @param string $Identity
     * @return \app\modules\dvr\components\onvif\wsdl\Dot1XConfiguration
     */
    public function setIdentity($Identity)
    {
      $this->Identity = $Identity;
      return $this;
    }

    /**
     * @return string
     */
    public function getAnonymousID()
    {
      return $this->AnonymousID;
    }

    /**
     * @param string $AnonymousID
     * @return \app\modules\dvr\components\onvif\wsdl\Dot1XConfiguration
     */
    public function setAnonymousID($AnonymousID)
    {
      $this->AnonymousID = $AnonymousID;
      return $this;
    }

    /**
     * @return int
     */
    public function getEAPMethod()
    {
      return $this->EAPMethod;
    }

    /**
     * @param int $EAPMethod
     * @return \app\modules\dvr\components\onvif\wsdl\Dot1XConfiguration
     */
    public function setEAPMethod($EAPMethod)
    {
      $this->EAPMethod = $EAPMethod;
      return $this;
    }

    /**
     * @return token[]
     */
    public function getCACertificateID()
    {
      return $this->CACertificateID;
    }

    /**
     * @param token[] $CACertificateID
     * @return \app\modules\dvr\components\onvif\wsdl\Dot1XConfiguration
     */
    public function setCACertificateID(array $CACertificateID = null)
    {
      $this->CACertificateID = $CACertificateID;
      return $this;
    }

    /**
     * @return EAPMethodConfiguration
     */
    public function getEAPMethodConfiguration()
    {
      return $this->EAPMethodConfiguration;
    }

    /**
     * @param EAPMethodConfiguration $EAPMethodConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\Dot1XConfiguration
     */
    public function setEAPMethodConfiguration($EAPMethodConfiguration)
    {
      $this->EAPMethodConfiguration = $EAPMethodConfiguration;
      return $this;
    }

    /**
     * @return Dot1XConfigurationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param Dot1XConfigurationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\Dot1XConfiguration
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
