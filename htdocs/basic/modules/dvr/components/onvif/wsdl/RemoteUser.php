<?php

namespace app\modules\dvr\components\onvif\wsdl;

class RemoteUser
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
     * @var boolean $UseDerivedPassword
     */
    protected $UseDerivedPassword = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Username
     * @param boolean $UseDerivedPassword
     * @param string $any
     */
    public function __construct($Username, $UseDerivedPassword, $any)
    {
      $this->Username = $Username;
      $this->UseDerivedPassword = $UseDerivedPassword;
      $this->any = $any;
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
     * @return \app\modules\dvr\components\onvif\wsdl\RemoteUser
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
     * @return \app\modules\dvr\components\onvif\wsdl\RemoteUser
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseDerivedPassword()
    {
      return $this->UseDerivedPassword;
    }

    /**
     * @param boolean $UseDerivedPassword
     * @return \app\modules\dvr\components\onvif\wsdl\RemoteUser
     */
    public function setUseDerivedPassword($UseDerivedPassword)
    {
      $this->UseDerivedPassword = $UseDerivedPassword;
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
     * @return \app\modules\dvr\components\onvif\wsdl\RemoteUser
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
