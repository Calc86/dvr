<?php

namespace app\modules\dvr\components\onvif\wsdl;

class UpgradeSystemFirmwareResponse
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
     * @return \app\modules\dvr\components\onvif\wsdl\UpgradeSystemFirmwareResponse
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

}
