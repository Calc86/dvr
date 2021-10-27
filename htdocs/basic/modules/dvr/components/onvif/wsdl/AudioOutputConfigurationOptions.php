<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AudioOutputConfigurationOptions
{

    /**
     * @var ReferenceToken[] $OutputTokensAvailable
     */
    protected $OutputTokensAvailable = null;

    /**
     * @var anyURI[] $SendPrimacyOptions
     */
    protected $SendPrimacyOptions = null;

    /**
     * @var IntRange $OutputLevelRange
     */
    protected $OutputLevelRange = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ReferenceToken[] $OutputTokensAvailable
     * @param IntRange $OutputLevelRange
     * @param string $any
     */
    public function __construct(array $OutputTokensAvailable, $OutputLevelRange, $any)
    {
      $this->OutputTokensAvailable = $OutputTokensAvailable;
      $this->OutputLevelRange = $OutputLevelRange;
      $this->any = $any;
    }

    /**
     * @return ReferenceToken[]
     */
    public function getOutputTokensAvailable()
    {
      return $this->OutputTokensAvailable;
    }

    /**
     * @param ReferenceToken[] $OutputTokensAvailable
     * @return \app\modules\dvr\components\onvif\wsdl\AudioOutputConfigurationOptions
     */
    public function setOutputTokensAvailable(array $OutputTokensAvailable)
    {
      $this->OutputTokensAvailable = $OutputTokensAvailable;
      return $this;
    }

    /**
     * @return anyURI[]
     */
    public function getSendPrimacyOptions()
    {
      return $this->SendPrimacyOptions;
    }

    /**
     * @param anyURI[] $SendPrimacyOptions
     * @return \app\modules\dvr\components\onvif\wsdl\AudioOutputConfigurationOptions
     */
    public function setSendPrimacyOptions(array $SendPrimacyOptions = null)
    {
      $this->SendPrimacyOptions = $SendPrimacyOptions;
      return $this;
    }

    /**
     * @return IntRange
     */
    public function getOutputLevelRange()
    {
      return $this->OutputLevelRange;
    }

    /**
     * @param IntRange $OutputLevelRange
     * @return \app\modules\dvr\components\onvif\wsdl\AudioOutputConfigurationOptions
     */
    public function setOutputLevelRange($OutputLevelRange)
    {
      $this->OutputLevelRange = $OutputLevelRange;
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
     * @return \app\modules\dvr\components\onvif\wsdl\AudioOutputConfigurationOptions
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
