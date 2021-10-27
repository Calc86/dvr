<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SystemRebootResponse
{

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @param string $Message
     */
    public function __construct($Message)
    {
      $this->Message = $Message;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \app\modules\dvr\components\onvif\wsdl\SystemRebootResponse
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

}
