<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetCertificatesResponse
{

    /**
     * @var Certificate $NvtCertificate
     */
    protected $NvtCertificate = null;

    /**
     * @param Certificate $NvtCertificate
     */
    public function __construct($NvtCertificate)
    {
      $this->NvtCertificate = $NvtCertificate;
    }

    /**
     * @return Certificate
     */
    public function getNvtCertificate()
    {
      return $this->NvtCertificate;
    }

    /**
     * @param Certificate $NvtCertificate
     * @return \app\modules\dvr\components\onvif\wsdl\GetCertificatesResponse
     */
    public function setNvtCertificate($NvtCertificate)
    {
      $this->NvtCertificate = $NvtCertificate;
      return $this;
    }

}
