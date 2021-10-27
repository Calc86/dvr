<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetSystemSupportInformationResponse
{

    /**
     * @var SupportInformation $SupportInformation
     */
    protected $SupportInformation = null;

    /**
     * @param SupportInformation $SupportInformation
     */
    public function __construct($SupportInformation)
    {
      $this->SupportInformation = $SupportInformation;
    }

    /**
     * @return SupportInformation
     */
    public function getSupportInformation()
    {
      return $this->SupportInformation;
    }

    /**
     * @param SupportInformation $SupportInformation
     * @return \app\modules\dvr\components\onvif\wsdl\GetSystemSupportInformationResponse
     */
    public function setSupportInformation($SupportInformation)
    {
      $this->SupportInformation = $SupportInformation;
      return $this;
    }

}
