<?php

namespace app\modules\dvr\components\onvif\wsdl;

class DeviceEntity
{

    /**
     * @var ReferenceToken $token
     */
    protected $token = null;

    /**
     * @param ReferenceToken $token
     */
    public function __construct($token)
    {
      $this->token = $token;
    }

    /**
     * @return ReferenceToken
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param ReferenceToken $token
     * @return \app\modules\dvr\components\onvif\wsdl\DeviceEntity
     */
    public function setToken($token)
    {
      $this->token = $token;
      return $this;
    }

}
