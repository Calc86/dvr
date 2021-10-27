<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetDot1XConfiguration
{

    /**
     * @var ReferenceToken $Dot1XConfigurationToken
     */
    protected $Dot1XConfigurationToken = null;

    /**
     * @param ReferenceToken $Dot1XConfigurationToken
     */
    public function __construct($Dot1XConfigurationToken)
    {
      $this->Dot1XConfigurationToken = $Dot1XConfigurationToken;
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
     * @return \app\modules\dvr\components\onvif\wsdl\GetDot1XConfiguration
     */
    public function setDot1XConfigurationToken($Dot1XConfigurationToken)
    {
      $this->Dot1XConfigurationToken = $Dot1XConfigurationToken;
      return $this;
    }

}
