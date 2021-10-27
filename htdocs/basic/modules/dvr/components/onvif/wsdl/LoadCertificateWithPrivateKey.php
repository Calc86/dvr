<?php

namespace app\modules\dvr\components\onvif\wsdl;

class LoadCertificateWithPrivateKey
{

    /**
     * @var CertificateWithPrivateKey $CertificateWithPrivateKey
     */
    protected $CertificateWithPrivateKey = null;

    /**
     * @param CertificateWithPrivateKey $CertificateWithPrivateKey
     */
    public function __construct($CertificateWithPrivateKey)
    {
      $this->CertificateWithPrivateKey = $CertificateWithPrivateKey;
    }

    /**
     * @return CertificateWithPrivateKey
     */
    public function getCertificateWithPrivateKey()
    {
      return $this->CertificateWithPrivateKey;
    }

    /**
     * @param CertificateWithPrivateKey $CertificateWithPrivateKey
     * @return \app\modules\dvr\components\onvif\wsdl\LoadCertificateWithPrivateKey
     */
    public function setCertificateWithPrivateKey($CertificateWithPrivateKey)
    {
      $this->CertificateWithPrivateKey = $CertificateWithPrivateKey;
      return $this;
    }

}
