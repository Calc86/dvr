<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetRemoteUser
{

    /**
     * @var RemoteUser $RemoteUser
     */
    protected $RemoteUser = null;

    /**
     * @param RemoteUser $RemoteUser
     */
    public function __construct($RemoteUser)
    {
      $this->RemoteUser = $RemoteUser;
    }

    /**
     * @return RemoteUser
     */
    public function getRemoteUser()
    {
      return $this->RemoteUser;
    }

    /**
     * @param RemoteUser $RemoteUser
     * @return \app\modules\dvr\components\onvif\wsdl\SetRemoteUser
     */
    public function setRemoteUser($RemoteUser)
    {
      $this->RemoteUser = $RemoteUser;
      return $this;
    }

}
