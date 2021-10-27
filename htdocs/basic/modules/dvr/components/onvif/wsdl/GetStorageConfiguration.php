<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetStorageConfiguration
{

    /**
     * @var ReferenceToken $Token
     */
    protected $Token = null;

    /**
     * @param ReferenceToken $Token
     */
    public function __construct($Token)
    {
      $this->Token = $Token;
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
     * @return \app\modules\dvr\components\onvif\wsdl\GetStorageConfiguration
     */
    public function setToken($Token)
    {
      $this->Token = $Token;
      return $this;
    }

}
