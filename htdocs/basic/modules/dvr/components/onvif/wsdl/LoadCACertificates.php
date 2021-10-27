<?php

namespace app\modules\dvr\components\onvif\wsdl;

class LoadCACertificates
{

    /**
     * @var Certificate $CACertificate
     */
    protected $CACertificate = null;

    /**
     * @param Certificate $CACertificate
     */
    public function __construct($CACertificate)
    {
      $this->CACertificate = $CACertificate;
    }

    /**
     * @return Certificate
     */
    public function getCACertificate()
    {
      return $this->CACertificate;
    }

    /**
     * @param Certificate $CACertificate
     * @return \app\modules\dvr\components\onvif\wsdl\LoadCACertificates
     */
    public function setCACertificate($CACertificate)
    {
      $this->CACertificate = $CACertificate;
      return $this;
    }

}
