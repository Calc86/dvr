<?php

namespace app\modules\dvr\components\onvif\wsdl;

class TimeZone
{

    /**
     * @var string $TZ
     */
    protected $TZ = null;

    /**
     * @param string $TZ
     */
    public function __construct($TZ)
    {
      $this->TZ = $TZ;
    }

    /**
     * @return string
     */
    public function getTZ()
    {
      return $this->TZ;
    }

    /**
     * @param string $TZ
     * @return \app\modules\dvr\components\onvif\wsdl\TimeZone
     */
    public function setTZ($TZ)
    {
      $this->TZ = $TZ;
      return $this;
    }

}
