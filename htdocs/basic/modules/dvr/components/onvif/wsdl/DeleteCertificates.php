<?php

namespace app\modules\dvr\components\onvif\wsdl;

class DeleteCertificates
{

    /**
     * @var string $CertificateID
     */
    protected $CertificateID = null;

    /**
     * @param string $CertificateID
     */
    public function __construct($CertificateID)
    {
      $this->CertificateID = $CertificateID;
    }

    /**
     * @return string
     */
    public function getCertificateID()
    {
      return $this->CertificateID;
    }

    /**
     * @param string $CertificateID
     * @return \app\modules\dvr\components\onvif\wsdl\DeleteCertificates
     */
    public function setCertificateID($CertificateID)
    {
      $this->CertificateID = $CertificateID;
      return $this;
    }

}
