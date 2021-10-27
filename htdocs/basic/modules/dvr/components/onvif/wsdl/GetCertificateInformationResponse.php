<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetCertificateInformationResponse
{

    /**
     * @var CertificateInformation $CertificateInformation
     */
    protected $CertificateInformation = null;

    /**
     * @param CertificateInformation $CertificateInformation
     */
    public function __construct($CertificateInformation)
    {
      $this->CertificateInformation = $CertificateInformation;
    }

    /**
     * @return CertificateInformation
     */
    public function getCertificateInformation()
    {
      return $this->CertificateInformation;
    }

    /**
     * @param CertificateInformation $CertificateInformation
     * @return \app\modules\dvr\components\onvif\wsdl\GetCertificateInformationResponse
     */
    public function setCertificateInformation($CertificateInformation)
    {
      $this->CertificateInformation = $CertificateInformation;
      return $this;
    }

}
