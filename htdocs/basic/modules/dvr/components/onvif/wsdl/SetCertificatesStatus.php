<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetCertificatesStatus
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
     * @return \app\modules\dvr\components\onvif\wsdl\SetCertificatesStatus
     */
    public function setCertificateStatus($CertificateStatus)
    {
      $this->CertificateStatus = $CertificateStatus;
      return $this;
    }

}
