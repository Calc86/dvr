<?php

namespace app\modules\dvr\components\onvif\wsdl;

class User
{

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var UserLevel $UserLevel
     */
    protected $UserLevel = null;

    /**
     * @var UserExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param string $Username
     * @param UserLevel $UserLevel
     */
    public function __construct($Username, $UserLevel)
    {
      $this->Username = $Username;
      $this->UserLevel = $UserLevel;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->Username;
    }

    /**
     * @param string $Username
     * @return \app\modules\dvr\components\onvif\wsdl\User
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \app\modules\dvr\components\onvif\wsdl\User
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return UserLevel
     */
    public function getUserLevel()
    {
      return $this->UserLevel;
    }

    /**
     * @param UserLevel $UserLevel
     * @return \app\modules\dvr\components\onvif\wsdl\User
     */
    public function setUserLevel($UserLevel)
    {
      $this->UserLevel = $UserLevel;
      return $this;
    }

    /**
     * @return UserExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param UserExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\User
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
