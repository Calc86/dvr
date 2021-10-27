<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AudioOutputConfiguration extends ConfigurationEntity
{

    /**
     * @var ReferenceToken $OutputToken
     */
    protected $OutputToken = null;

    /**
     * @var anyURI $SendPrimacy
     */
    protected $SendPrimacy = null;

    /**
     * @var int $OutputLevel
     */
    protected $OutputLevel = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param Name $Name
     * @param int $UseCount
     * @param ReferenceToken $token
     * @param ReferenceToken $OutputToken
     * @param int $OutputLevel
     * @param string $any
     */
    public function __construct($Name, $UseCount, $token, $OutputToken, $OutputLevel, $any)
    {
      parent::__construct($Name, $UseCount, $token);
      $this->OutputToken = $OutputToken;
      $this->OutputLevel = $OutputLevel;
      $this->any = $any;
    }

    /**
     * @return ReferenceToken
     */
    public function getOutputToken()
    {
      return $this->OutputToken;
    }

    /**
     * @param ReferenceToken $OutputToken
     * @return \app\modules\dvr\components\onvif\wsdl\AudioOutputConfiguration
     */
    public function setOutputToken($OutputToken)
    {
      $this->OutputToken = $OutputToken;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getSendPrimacy()
    {
      return $this->SendPrimacy;
    }

    /**
     * @param anyURI $SendPrimacy
     * @return \app\modules\dvr\components\onvif\wsdl\AudioOutputConfiguration
     */
    public function setSendPrimacy($SendPrimacy)
    {
      $this->SendPrimacy = $SendPrimacy;
      return $this;
    }

    /**
     * @return int
     */
    public function getOutputLevel()
    {
      return $this->OutputLevel;
    }

    /**
     * @param int $OutputLevel
     * @return \app\modules\dvr\components\onvif\wsdl\AudioOutputConfiguration
     */
    public function setOutputLevel($OutputLevel)
    {
      $this->OutputLevel = $OutputLevel;
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
     * @return \app\modules\dvr\components\onvif\wsdl\AudioOutputConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
