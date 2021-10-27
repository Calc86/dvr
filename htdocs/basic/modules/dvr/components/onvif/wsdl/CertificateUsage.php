<?php

namespace app\modules\dvr\components\onvif\wsdl;

class CertificateUsage
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var boolean $Critical
     */
    protected $Critical = null;

    /**
     * @param string $_
     * @param boolean $Critical
     */
    public function __construct($_, $Critical)
    {
      $this->_ = $_;
      $this->Critical = $Critical;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateUsage
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCritical()
    {
      return $this->Critical;
    }

    /**
     * @param boolean $Critical
     * @return \app\modules\dvr\components\onvif\wsdl\CertificateUsage
     */
    public function setCritical($Critical)
    {
      $this->Critical = $Critical;
      return $this;
    }

}
