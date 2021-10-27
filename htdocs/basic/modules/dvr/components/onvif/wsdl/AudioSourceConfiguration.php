<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AudioSourceConfiguration extends ConfigurationEntity
{

    /**
     * @var ReferenceToken $SourceToken
     */
    protected $SourceToken = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param Name $Name
     * @param int $UseCount
     * @param ReferenceToken $token
     * @param ReferenceToken $SourceToken
     * @param string $any
     */
    public function __construct($Name, $UseCount, $token, $SourceToken, $any)
    {
      parent::__construct($Name, $UseCount, $token);
      $this->SourceToken = $SourceToken;
      $this->any = $any;
    }

    /**
     * @return ReferenceToken
     */
    public function getSourceToken()
    {
      return $this->SourceToken;
    }

    /**
     * @param ReferenceToken $SourceToken
     * @return \app\modules\dvr\components\onvif\wsdl\AudioSourceConfiguration
     */
    public function setSourceToken($SourceToken)
    {
      $this->SourceToken = $SourceToken;
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
     * @return \app\modules\dvr\components\onvif\wsdl\AudioSourceConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
