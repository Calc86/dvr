<?php

namespace app\modules\dvr\components\onvif\wsdl;

class CertificateStatus
{

    /**
     * @var string $CertificateID
     */
    protected $CertificateID = null;

    /**
     * @var boolean $Status
     */
    protected $Status = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $CertificateID
     * @param boolean $Status
     * @param string $any
     */
    public function __construct($CertificateID, $Status, $any)
    {
      $this->CertificateID = $CertificateID;
      $this->Status = $Status;
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
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateStatus
     */
    public function setCertificateID($CertificateID)
    {
      $this->CertificateID = $CertificateID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param boolean $Status
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateStatus
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateStatus
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
