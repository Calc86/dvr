<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetPkcs10RequestResponse
{

    /**
     * @var BinaryData $Pkcs10Request
     */
    protected $Pkcs10Request = null;

    /**
     * @param BinaryData $Pkcs10Request
     */
    public function __construct($Pkcs10Request)
    {
      $this->Pkcs10Request = $Pkcs10Request;
    }

    /**
     * @return BinaryData
     */
    public function getPkcs10Request()
    {
      return $this->Pkcs10Request;
    }

    /**
     * @param BinaryData $Pkcs10Request
     * @return \app\modules\dvr\components\onvif\wsdl\GetPkcs10RequestResponse
     */
    public function setPkcs10Request($Pkcs10Request)
    {
      $this->Pkcs10Request = $Pkcs10Request;
      return $this;
    }

}
