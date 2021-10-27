<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AnalyticsEngineControl extends ConfigurationEntity
{

    /**
     * @var ReferenceToken $EngineToken
     */
    protected $EngineToken = null;

    /**
     * @var ReferenceToken $EngineConfigToken
     */
    protected $EngineConfigToken = null;

    /**
     * @var ReferenceToken[] $InputToken
     */
    protected $InputToken = null;

    /**
     * @var ReferenceToken[] $ReceiverToken
     */
    protected $ReceiverToken = null;

    /**
     * @var MulticastConfiguration $Multicast
     */
    protected $Multicast = null;

    /**
     * @var Config $Subscription
     */
    protected $Subscription = null;

    /**
     * @var ModeOfOperation $Mode
     */
    protected $Mode = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param Name $Name
     * @param int $UseCount
     * @param ReferenceToken $token
     * @param ReferenceToken $EngineToken
     * @param ReferenceToken $EngineConfigToken
     * @param ReferenceToken[] $InputToken
     * @param ReferenceToken[] $ReceiverToken
     * @param Config $Subscription
     * @param ModeOfOperation $Mode
     * @param string $any
     */
    public function __construct($Name, $UseCount, $token, $EngineToken, $EngineConfigToken, array $InputToken, array $ReceiverToken, $Subscription, $Mode, $any)
    {
      parent::__construct($Name, $UseCount, $token);
      $this->EngineToken = $EngineToken;
      $this->EngineConfigToken = $EngineConfigToken;
      $this->InputToken = $InputToken;
      $this->ReceiverToken = $ReceiverToken;
      $this->Subscription = $Subscription;
      $this->Mode = $Mode;
      $this->any = $any;
    }

    /**
     * @return ReferenceToken
     */
    public function getEngineToken()
    {
      return $this->EngineToken;
    }

    /**
     * @param ReferenceToken $EngineToken
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsEngineControl
     */
    public function setEngineToken($EngineToken)
    {
      $this->EngineToken = $EngineToken;
      return $this;
    }

    /**
     * @return ReferenceToken
     */
    public function getEngineConfigToken()
    {
      return $this->EngineConfigToken;
    }

    /**
     * @param ReferenceToken $EngineConfigToken
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsEngineControl
     */
    public function setEngineConfigToken($EngineConfigToken)
    {
      $this->EngineConfigToken = $EngineConfigToken;
      return $this;
    }

    /**
     * @return ReferenceToken[]
     */
    public function getInputToken()
    {
      return $this->InputToken;
    }

    /**
     * @param ReferenceToken[] $InputToken
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsEngineControl
     */
    public function setInputToken(array $InputToken)
    {
      $this->InputToken = $InputToken;
      return $this;
    }

    /**
     * @return ReferenceToken[]
     */
    public function getReceiverToken()
    {
      return $this->ReceiverToken;
    }

    /**
     * @param ReferenceToken[] $ReceiverToken
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsEngineControl
     */
    public function setReceiverToken(array $ReceiverToken)
    {
      $this->ReceiverToken = $ReceiverToken;
      return $this;
    }

    /**
     * @return MulticastConfiguration
     */
    public function getMulticast()
    {
      return $this->Multicast;
    }

    /**
     * @param MulticastConfiguration $Multicast
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsEngineControl
     */
    public function setMulticast($Multicast)
    {
      $this->Multicast = $Multicast;
      return $this;
    }

    /**
     * @return Config
     */
    public function getSubscription()
    {
      return $this->Subscription;
    }

    /**
     * @param Config $Subscription
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsEngineControl
     */
    public function setSubscription($Subscription)
    {
      $this->Subscription = $Subscription;
      return $this;
    }

    /**
     * @return ModeOfOperation
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param ModeOfOperation $Mode
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsEngineControl
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
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
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsEngineControl
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
