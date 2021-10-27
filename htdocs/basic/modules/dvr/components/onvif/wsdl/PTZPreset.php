<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PTZPreset
{

    /**
     * @var Name $Name
     */
    protected $Name = null;

    /**
     * @var PTZVector $PTZPosition
     */
    protected $PTZPosition = null;

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
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPreset
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return PTZVector
     */
    public function getPTZPosition()
    {
      return $this->PTZPosition;
    }

    /**
     * @param PTZVector $PTZPosition
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPreset
     */
    public function setPTZPosition($PTZPosition)
    {
      $this->PTZPosition = $PTZPosition;
      return $this;
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
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPreset
     */
    public function setToken($token)
    {
      $this->token = $token;
      return $this;
    }

}
