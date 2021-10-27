<?php

namespace app\modules\dvr\components\onvif\wsdl;

class UserCredential
{

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var Extension $Extension
     */
    protected $Extension = null;

    /**
     * @param string $UserName
     */
    public function __construct($UserName)
    {
      $this->UserName = $UserName;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return \app\modules\dvr\components\onvif\wsdl\UserCredential
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
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
     * @return \app\modules\dvr\components\onvif\wsdl\UserCredential
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return Extension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param Extension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\UserCredential
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
