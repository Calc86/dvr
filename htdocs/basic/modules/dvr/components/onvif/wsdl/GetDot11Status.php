<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetDot11Status
{

    /**
     * @var ReferenceToken $InterfaceToken
     */
    protected $InterfaceToken = null;

    /**
     * @param ReferenceToken $InterfaceToken
     */
    public function __construct($InterfaceToken)
    {
      $this->InterfaceToken = $InterfaceToken;
    }

    /**
     * @return ReferenceToken
     */
    public function getInterfaceToken()
    {
      return $this->InterfaceToken;
    }

    /**
     * @param ReferenceToken $InterfaceToken
     * @return \app\modules\dvr\components\onvif\wsdl\GetDot11Status
     */
    public function setInterfaceToken($InterfaceToken)
    {
      $this->InterfaceToken = $InterfaceToken;
      return $this;
    }

}
