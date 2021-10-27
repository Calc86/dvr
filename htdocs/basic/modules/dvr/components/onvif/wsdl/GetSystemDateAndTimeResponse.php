<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetSystemDateAndTimeResponse
{

    /**
     * @var SystemDateTime $SystemDateAndTime
     */
    protected $SystemDateAndTime = null;

    /**
     * @param SystemDateTime $SystemDateAndTime
     */
    public function __construct($SystemDateAndTime)
    {
      $this->SystemDateAndTime = $SystemDateAndTime;
    }

    /**
     * @return SystemDateTime
     */
    public function getSystemDateAndTime()
    {
      return $this->SystemDateAndTime;
    }

    /**
     * @param SystemDateTime $SystemDateAndTime
     * @return \app\modules\dvr\components\onvif\wsdl\GetSystemDateAndTimeResponse
     */
    public function setSystemDateAndTime($SystemDateAndTime)
    {
      $this->SystemDateAndTime = $SystemDateAndTime;
      return $this;
    }

}
