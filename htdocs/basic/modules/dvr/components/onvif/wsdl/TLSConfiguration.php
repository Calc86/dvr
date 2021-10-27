<?php

namespace app\modules\dvr\components\onvif\wsdl;

class TLSConfiguration
{

    /**
     * @var string $CertificateID
     */
    protected $CertificateID = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $CertificateID
     * @param string $any
     */
    public function __construct($CertificateID, $any)
    {
      $this->CertificateID = $CertificateID;
      $this->any = $any;
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
     * @return \app\modules\dvr\components\onvif\wsdl\TLSConfiguration
     */
    public function setCertificateID($CertificateID)
    {
      $this->CertificateID = $CertificateID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \app\modules\dvr\components\onvif\wsdl\TLSConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
