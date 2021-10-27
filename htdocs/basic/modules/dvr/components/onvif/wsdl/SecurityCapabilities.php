<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SecurityCapabilities
{

    /**
     * @var boolean $TLS10
     */
    protected $TLS10 = null;

    /**
     * @var boolean $TLS11
     */
    protected $TLS11 = null;

    /**
     * @var boolean $TLS12
     */
    protected $TLS12 = null;

    /**
     * @var boolean $OnboardKeyGeneration
     */
    protected $OnboardKeyGeneration = null;

    /**
     * @var boolean $AccessPolicyConfig
     */
    protected $AccessPolicyConfig = null;

    /**
     * @var boolean $DefaultAccessPolicy
     */
    protected $DefaultAccessPolicy = null;

    /**
     * @var boolean $Dot1X
     */
    protected $Dot1X = null;

    /**
     * @var boolean $RemoteUserHandling
     */
    protected $RemoteUserHandling = null;

    /**
     * @var boolean $X509Token
     */
    protected $X509Token = null;

    /**
     * @var boolean $SAMLToken
     */
    protected $SAMLToken = null;

    /**
     * @var boolean $KerberosToken
     */
    protected $KerberosToken = null;

    /**
     * @var boolean $UsernameToken
     */
    protected $UsernameToken = null;

    /**
     * @var boolean $HttpDigest
     */
    protected $HttpDigest = null;

    /**
     * @var boolean $RELToken
     */
    protected $RELToken = null;

    /**
     * @var IntList $SupportedEAPMethods
     */
    protected $SupportedEAPMethods = null;

    /**
     * @var int $MaxUsers
     */
    protected $MaxUsers = null;

    /**
     * @var int $MaxUserNameLength
     */
    protected $MaxUserNameLength = null;

    /**
     * @var int $MaxPasswordLength
     */
    protected $MaxPasswordLength = null;

    /**
     * @var StringList $SecurityPolicies
     */
    protected $SecurityPolicies = null;

    /**
     * @param boolean $TLS10
     * @param boolean $TLS11
     * @param boolean $TLS12
     * @param boolean $OnboardKeyGeneration
     * @param boolean $AccessPolicyConfig
     * @param boolean $DefaultAccessPolicy
     * @param boolean $Dot1X
     * @param boolean $RemoteUserHandling
     * @param boolean $X509Token
     * @param boolean $SAMLToken
     * @param boolean $KerberosToken
     * @param boolean $UsernameToken
     * @param boolean $HttpDigest
     * @param boolean $RELToken
     * @param IntList $SupportedEAPMethods
     * @param int $MaxUsers
     * @param int $MaxUserNameLength
     * @param int $MaxPasswordLength
     * @param StringList $SecurityPolicies
     */
    public function __construct($TLS10, $TLS11, $TLS12, $OnboardKeyGeneration, $AccessPolicyConfig, $DefaultAccessPolicy, $Dot1X, $RemoteUserHandling, $X509Token, $SAMLToken, $KerberosToken, $UsernameToken, $HttpDigest, $RELToken, $SupportedEAPMethods, $MaxUsers, $MaxUserNameLength, $MaxPasswordLength, $SecurityPolicies)
    {
      $this->TLS10 = $TLS10;
      $this->TLS11 = $TLS11;
      $this->TLS12 = $TLS12;
      $this->OnboardKeyGeneration = $OnboardKeyGeneration;
      $this->AccessPolicyConfig = $AccessPolicyConfig;
      $this->DefaultAccessPolicy = $DefaultAccessPolicy;
      $this->Dot1X = $Dot1X;
      $this->RemoteUserHandling = $RemoteUserHandling;
      $this->X509Token = $X509Token;
      $this->SAMLToken = $SAMLToken;
      $this->KerberosToken = $KerberosToken;
      $this->UsernameToken = $UsernameToken;
      $this->HttpDigest = $HttpDigest;
      $this->RELToken = $RELToken;
      $this->SupportedEAPMethods = $SupportedEAPMethods;
      $this->MaxUsers = $MaxUsers;
      $this->MaxUserNameLength = $MaxUserNameLength;
      $this->MaxPasswordLength = $MaxPasswordLength;
      $this->SecurityPolicies = $SecurityPolicies;
    }

    /**
     * @return boolean
     */
    public function getTLS10()
    {
      return $this->TLS10;
    }

    /**
     * @param boolean $TLS10
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilities
     */
    public function setTLS10($TLS10)
    {
      $this->TLS10 = $TLS10;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTLS11()
    {
      return $this->TLS11;
    }

    /**
     * @param boolean $TLS11
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilities
     */
    public function setTLS11($TLS11)
    {
      $this->TLS11 = $TLS11;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTLS12()
    {
      return $this->TLS12;
    }

    /**
     * @param boolean $TLS12
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilities
     */
    public function setTLS12($TLS12)
    {
      $this->TLS12 = $TLS12;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnboardKeyGeneration()
    {
      return $this->OnboardKeyGeneration;
    }

    /**
     * @param boolean $OnboardKeyGeneration
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilities
     */
    public function setOnboardKeyGeneration($OnboardKeyGeneration)
    {
      $this->OnboardKeyGeneration = $OnboardKeyGeneration;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAccessPolicyConfig()
    {
      return $this->AccessPolicyConfig;
    }

    /**
     * @param boolean $AccessPolicyConfig
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilities
     */
    public function setAccessPolicyConfig($AccessPolicyConfig)
    {
      $this->AccessPolicyConfig = $AccessPolicyConfig;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultAccessPolicy()
    {
      return $this->DefaultAccessPolicy;
    }

    /**
     * @param boolean $DefaultAccessPolicy
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilities
     */
    public function setDefaultAccessPolicy($DefaultAccessPolicy)
    {
      $this->DefaultAccessPolicy = $DefaultAccessPolicy;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDot1X()
    {
      return $this->Dot1X;
    }

    /**
     * @param boolean $Dot1X
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilities
     */
    public function setDot1X($Dot1X)
    {
      $this->Dot1X = $Dot1X;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRemoteUserHandling()
    {
      return $this->RemoteUserHandling;
    }

    /**
     * @param boolean $RemoteUserHandling
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilities
     */
    public function setRemoteUserHandling($RemoteUserHandling)
    {
      $this->RemoteUserHandling = $RemoteUserHandling;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getX509Token()
    {
      return $this->X509Token;
    }

    /**
     * @param boolean $X509Token
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilities
     */
    public function setX509Token($X509Token)
    {
      $this->X509Token = $X509Token;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSAMLToken()
    {
      return $this->SAMLToken;
    }

    /**
     * @param boolean $SAMLToken
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilities
     */
    public function setSAMLToken($SAMLToken)
    {
      $this->SAMLToken = $SAMLToken;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKerberosToken()
    {
      return $this->KerberosToken;
    }

    /**
     * @param boolean $KerberosToken
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilities
     */
    public function setKerberosToken($KerberosToken)
    {
      $this->KerberosToken = $KerberosToken;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUsernameToken()
    {
      return $this->UsernameToken;
    }

    /**
     * @param boolean $UsernameToken
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilities
     */
    public function setUsernameToken($UsernameToken)
    {
      $this->UsernameToken = $UsernameToken;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHttpDigest()
    {
      return $this->HttpDigest;
    }

    /**
     * @param boolean $HttpDigest
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilities
     */
    public function setHttpDigest($HttpDigest)
    {
      $this->HttpDigest = $HttpDigest;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRELToken()
    {
      return $this->RELToken;
    }

    /**
     * @param boolean $RELToken
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilities
     */
    public function setRELToken($RELToken)
    {
      $this->RELToken = $RELToken;
      return $this;
    }

    /**
     * @return IntList
     */
    public function getSupportedEAPMethods()
    {
      return $this->SupportedEAPMethods;
    }

    /**
     * @param IntList $SupportedEAPMethods
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilities
     */
    public function setSupportedEAPMethods($SupportedEAPMethods)
    {
      $this->SupportedEAPMethods = $SupportedEAPMethods;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxUsers()
    {
      return $this->MaxUsers;
    }

    /**
     * @param int $MaxUsers
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilities
     */
    public function setMaxUsers($MaxUsers)
    {
      $this->MaxUsers = $MaxUsers;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxUserNameLength()
    {
      return $this->MaxUserNameLength;
    }

    /**
     * @param int $MaxUserNameLength
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilities
     */
    public function setMaxUserNameLength($MaxUserNameLength)
    {
      $this->MaxUserNameLength = $MaxUserNameLength;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxPasswordLength()
    {
      return $this->MaxPasswordLength;
    }

    /**
     * @param int $MaxPasswordLength
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilities
     */
    public function setMaxPasswordLength($MaxPasswordLength)
    {
      $this->MaxPasswordLength = $MaxPasswordLength;
      return $this;
    }

    /**
     * @return StringList
     */
    public function getSecurityPolicies()
    {
      return $this->SecurityPolicies;
    }

    /**
     * @param StringList $SecurityPolicies
     * @return \app\modules\dvr\components\onvif\wsdl\SecurityCapabilities
     */
    public function setSecurityPolicies($SecurityPolicies)
    {
      $this->SecurityPolicies = $SecurityPolicies;
      return $this;
    }

}
