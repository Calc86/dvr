<?php

namespace app\modules\dvr\components\onvif\wsdl;

class LoadCertificates
{

    /**
     * @var Certificate $NVTCertificate
     */
    protected $NVTCertificate = null;

    /**
     * @param Certificate $NVTCertificate
     */
    public function __construct($NVTCertificate)
    {
      $this->NVTCertificate = $NVTCertificate;
    }

    /**
     * @return Certificate
     */
    public function getNVTCertificate()
    {
      return $this->NVTCertificate;
    }

    /**
     * @param Certificate $NVTCertificate
     * @return \app\modules\dvr\components\onvif\wsdl\LoadCertificates
     */
    public function setNVTCertificate($NVTCertificate)
    {
      $this->NVTCertificate = $NVTCertificate;
      return $this;
    }

}
