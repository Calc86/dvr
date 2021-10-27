<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetRelayOutputSettings
{

    /**
     * @var ReferenceToken $RelayOutputToken
     */
    protected $RelayOutputToken = null;

    /**
     * @var RelayOutputSettings $Properties
     */
    protected $Properties = null;

    /**
     * @param ReferenceToken $RelayOutputToken
     * @param RelayOutputSettings $Properties
     */
    public function __construct($RelayOutputToken, $Properties)
    {
      $this->RelayOutputToken = $RelayOutputToken;
      $this->Properties = $Properties;
    }

    /**
     * @return ReferenceToken
     */
    public function getRelayOutputToken()
    {
      return $this->RelayOutputToken;
    }

    /**
     * @param ReferenceToken $RelayOutputToken
     * @return \app\modules\dvr\components\onvif\wsdl\SetRelayOutputSettings
     */
    public function setRelayOutputToken($RelayOutputToken)
    {
      $this->RelayOutputToken = $RelayOutputToken;
      return $this;
    }

    /**
     * @return RelayOutputSettings
     */
    public function getProperties()
    {
      return $this->Properties;
    }

    /**
     * @param RelayOutputSettings $Properties
     * @return \app\modules\dvr\components\onvif\wsdl\SetRelayOutputSettings
     */
    public function setProperties($Properties)
    {
      $this->Properties = $Properties;
      return $this;
    }

}
