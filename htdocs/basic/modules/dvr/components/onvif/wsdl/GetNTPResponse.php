<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetNTPResponse
{

    /**
     * @var NTPInformation $NTPInformation
     */
    protected $NTPInformation = null;

    /**
     * @param NTPInformation $NTPInformation
     */
    public function __construct($NTPInformation)
    {
      $this->NTPInformation = $NTPInformation;
    }

    /**
     * @return NTPInformation
     */
    public function getNTPInformation()
    {
      return $this->NTPInformation;
    }

    /**
     * @param NTPInformation $NTPInformation
     * @return \app\modules\dvr\components\onvif\wsdl\GetNTPResponse
     */
    public function setNTPInformation($NTPInformation)
    {
      $this->NTPInformation = $NTPInformation;
      return $this;
    }

}
