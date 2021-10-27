<?php

namespace app\modules\dvr\components\onvif\wsdl;

class CertificateInformation
{

    /**
     * @var string $CertificateID
     */
    protected $CertificateID = null;

    /**
     * @var string $IssuerDN
     */
    protected $IssuerDN = null;

    /**
     * @var string $SubjectDN
     */
    protected $SubjectDN = null;

    /**
     * @var CertificateUsage $KeyUsage
     */
    protected $KeyUsage = null;

    /**
     * @var CertificateUsage $ExtendedKeyUsage
     */
    protected $ExtendedKeyUsage = null;

    /**
     * @var int $KeyLength
     */
    protected $KeyLength = null;

    /**
     * @var string $Version
     */
    protected $Version = null;

    /**
     * @var string $SerialNum
     */
    protected $SerialNum = null;

    /**
     * @var string $SignatureAlgorithm
     */
    protected $SignatureAlgorithm = null;

    /**
     * @var DateTimeRange $Validity
     */
    protected $Validity = null;

    /**
     * @var CertificateInformationExtension $Extension
     */
    protected $Extension = null;

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
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateInformation
     */
    public function setCertificateID($CertificateID)
    {
      $this->CertificateID = $CertificateID;
      return $this;
    }

    /**
     * @return string
     */
    public function getIssuerDN()
    {
      return $this->IssuerDN;
    }

    /**
     * @param string $IssuerDN
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateInformation
     */
    public function setIssuerDN($IssuerDN)
    {
      $this->IssuerDN = $IssuerDN;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubjectDN()
    {
      return $this->SubjectDN;
    }

    /**
     * @param string $SubjectDN
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateInformation
     */
    public function setSubjectDN($SubjectDN)
    {
      $this->SubjectDN = $SubjectDN;
      return $this;
    }

    /**
     * @return CertificateUsage
     */
    public function getKeyUsage()
    {
      return $this->KeyUsage;
    }

    /**
     * @param CertificateUsage $KeyUsage
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateInformation
     */
    public function setKeyUsage($KeyUsage)
    {
      $this->KeyUsage = $KeyUsage;
      return $this;
    }

    /**
     * @return CertificateUsage
     */
    public function getExtendedKeyUsage()
    {
      return $this->ExtendedKeyUsage;
    }

    /**
     * @param CertificateUsage $ExtendedKeyUsage
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateInformation
     */
    public function setExtendedKeyUsage($ExtendedKeyUsage)
    {
      $this->ExtendedKeyUsage = $ExtendedKeyUsage;
      return $this;
    }

    /**
     * @return int
     */
    public function getKeyLength()
    {
      return $this->KeyLength;
    }

    /**
     * @param int $KeyLength
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateInformation
     */
    public function setKeyLength($KeyLength)
    {
      $this->KeyLength = $KeyLength;
      return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param string $Version
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateInformation
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNum()
    {
      return $this->SerialNum;
    }

    /**
     * @param string $SerialNum
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateInformation
     */
    public function setSerialNum($SerialNum)
    {
      $this->SerialNum = $SerialNum;
      return $this;
    }

    /**
     * @return string
     */
    public function getSignatureAlgorithm()
    {
      return $this->SignatureAlgorithm;
    }

    /**
     * @param string $SignatureAlgorithm
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateInformation
     */
    public function setSignatureAlgorithm($SignatureAlgorithm)
    {
      $this->SignatureAlgorithm = $SignatureAlgorithm;
      return $this;
    }

    /**
     * @return DateTimeRange
     */
    public function getValidity()
    {
      return $this->Validity;
    }

    /**
     * @param DateTimeRange $Validity
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateInformation
     */
    public function setValidity($Validity)
    {
      $this->Validity = $Validity;
      return $this;
    }

    /**
     * @return CertificateInformationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param CertificateInformationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateInformation
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
