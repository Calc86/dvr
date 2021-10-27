<?php

namespace app\modules\dvr\components\onvif\wsdl;

class CreateCertificate
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
     * @var \DateTime $ValidNotBefore
     */
    protected $ValidNotBefore = null;

    /**
     * @var \DateTime $ValidNotAfter
     */
    protected $ValidNotAfter = null;

    /**
     * @param string $CertificateID
     * @param string $Subject
     * @param \DateTime $ValidNotBefore
     * @param \DateTime $ValidNotAfter
     */
    public function __construct($CertificateID, $Subject, \DateTime $ValidNotBefore, \DateTime $ValidNotAfter)
    {
      $this->CertificateID = $CertificateID;
      $this->Subject = $Subject;
      $this->ValidNotBefore = $ValidNotBefore->format(\DateTime::ATOM);
      $this->ValidNotAfter = $ValidNotAfter->format(\DateTime::ATOM);
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
     * @return \app\modules\dvr\components\onvif\wsdl\CreateCertificate
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
     * @return \app\modules\dvr\components\onvif\wsdl\CreateCertificate
     */
    public function setSubject($Subject)
    {
      $this->Subject = $Subject;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidNotBefore()
    {
      if ($this->ValidNotBefore == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ValidNotBefore);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ValidNotBefore
     * @return \app\modules\dvr\components\onvif\wsdl\CreateCertificate
     */
    public function setValidNotBefore(\DateTime $ValidNotBefore)
    {
      $this->ValidNotBefore = $ValidNotBefore->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidNotAfter()
    {
      if ($this->ValidNotAfter == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ValidNotAfter);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ValidNotAfter
     * @return \app\modules\dvr\components\onvif\wsdl\CreateCertificate
     */
    public function setValidNotAfter(\DateTime $ValidNotAfter)
    {
      $this->ValidNotAfter = $ValidNotAfter->format(\DateTime::ATOM);
      return $this;
    }

}
