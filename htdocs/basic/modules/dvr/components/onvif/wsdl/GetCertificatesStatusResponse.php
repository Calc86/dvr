<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetCertificatesStatusResponse
{

    /**
     * @var CertificateStatus $CertificateStatus
     */
    protected $CertificateStatus = null;

    /**
     * @param CertificateStatus $CertificateStatus
     */
    public function __construct($CertificateStatus)
    {
      $this->CertificateStatus = $CertificateStatus;
    }

    /**
     * @return CertificateStatus
     */
    public function getCertificateStatus()
    {
      return $this->CertificateStatus;
    }

    /**
     * @param CertificateStatus $CertificateStatus
     * @return \app\modules\dvr\components\onvif\wsdl\GetCertificatesStatusResponse
     */
    public function setCertificateStatus($CertificateStatus)
    {
      $this->CertificateStatus = $CertificateStatus;
      return $this;
    }

}
