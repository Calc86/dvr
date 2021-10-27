<?php

namespace app\modules\dvr\components\onvif\wsdl;

class CertificateWithPrivateKey
{

    /**
     * @var string $CertificateID
     */
    protected $CertificateID = null;

    /**
     * @var BinaryData $Certificate
     */
    protected $Certificate = null;

    /**
     * @var BinaryData $PrivateKey
     */
    protected $PrivateKey = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param BinaryData $Certificate
     * @param BinaryData $PrivateKey
     * @param string $any
     */
    public function __construct($Certificate, $PrivateKey, $any)
    {
      $this->Certificate = $Certificate;
      $this->PrivateKey = $PrivateKey;
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
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateWithPrivateKey
     */
    public function setCertificateID($CertificateID)
    {
      $this->CertificateID = $CertificateID;
      return $this;
    }

    /**
     * @return BinaryData
     */
    public function getCertificate()
    {
      return $this->Certificate;
    }

    /**
     * @param BinaryData $Certificate
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateWithPrivateKey
     */
    public function setCertificate($Certificate)
    {
      $this->Certificate = $Certificate;
      return $this;
    }

    /**
     * @return BinaryData
     */
    public function getPrivateKey()
    {
      return $this->PrivateKey;
    }

    /**
     * @param BinaryData $PrivateKey
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateWithPrivateKey
     */
    public function setPrivateKey($PrivateKey)
    {
      $this->PrivateKey = $PrivateKey;
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
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateWithPrivateKey
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
