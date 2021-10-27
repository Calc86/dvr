<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetUsersResponse
{

    /**
     * @var User $User
     */
    protected $User = null;

    /**
     * @param User $User
     */
    public function __construct($User)
    {
      $this->User = $User;
    }

    /**
     * @return User
     */
    public function getUser()
    {
      return $this->User;
    }

    /**
     * @param User $User
     * @return \app\modules\dvr\components\onvif\wsdl\GetUsersResponse
     */
    public function setUser($User)
    {
      $this->User = $User;
      return $this;
    }

}
