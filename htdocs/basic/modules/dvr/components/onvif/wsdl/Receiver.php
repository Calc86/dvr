<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Receiver
{

    /**
     * @var ReferenceToken $Token
     */
    protected $Token = null;

    /**
     * @var ReceiverConfiguration $Configuration
     */
    protected $Configuration = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ReferenceToken $Token
     * @param ReceiverConfiguration $Configuration
     * @param string $any
     */
    public function __construct($Token, $Configuration, $any)
    {
      $this->Token = $Token;
      $this->Configuration = $Configuration;
      $this->any = $any;
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
     * @return \app\modules\dvr\components\onvif\wsdl\Receiver
     */
    public function setToken($Token)
    {
      $this->Token = $Token;
      return $this;
    }

    /**
     * @return ReceiverConfiguration
     */
    public function getConfiguration()
    {
      return $this->Configuration;
    }

    /**
     * @param ReceiverConfiguration $Configuration
     * @return \app\modules\dvr\components\onvif\wsdl\Receiver
     */
    public function setConfiguration($Configuration)
    {
      $this->Configuration = $Configuration;
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
     * @return \app\modules\dvr\components\onvif\wsdl\Receiver
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
