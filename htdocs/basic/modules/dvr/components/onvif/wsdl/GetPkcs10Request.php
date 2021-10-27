<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetPkcs10Request
{

    /**
     * @var string $CertificateID
     */
    protected $CertificateID = null;

    /**
     * @var string $Subject
     */
    protected $Subject = null;

    /**
     * @var BinaryData $Attributes
     */
    protected $Attributes = null;

    /**
     * @param string $CertificateID
     * @param string $Subject
     * @param BinaryData $Attributes
     */
    public function __construct($CertificateID, $Subject, $Attributes)
    {
      $this->CertificateID = $CertificateID;
      $this->Subject = $Subject;
      $this->Attributes = $Attributes;
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
     * @return \app\modules\dvr\components\onvif\wsdl\GetPkcs10Request
     */
    public function setCertificateID($CertificateID)
    {
      $this->CertificateID = $CertificateID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
      return $this->Subject;
    }

    /**
     * @param string $Subject
     * @return \app\modules\dvr\components\onvif\wsdl\GetPkcs10Request
     */
    public function setSubject($Subject)
    {
      $this->Subject = $Subject;
      return $this;
    }

    /**
     * @return BinaryData
     */
    public function getAttributes()
    {
      return $this->Attributes;
    }

    /**
     * @param BinaryData $Attributes
     * @return \app\modules\dvr\components\onvif\wsdl\GetPkcs10Request
     */
    public function setAttributes($Attributes)
    {
      $this->Attributes = $Attributes;
      return $this;
    }

}
