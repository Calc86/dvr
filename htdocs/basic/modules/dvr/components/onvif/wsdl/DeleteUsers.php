<?php

namespace app\modules\dvr\components\onvif\wsdl;

class DeleteUsers
{

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @param string $Username
     */
    public function __construct($Username)
    {
      $this->Username = $Username;
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
     * @return \app\modules\dvr\components\onvif\wsdl\DeleteUsers
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
      return $this;
    }

}
