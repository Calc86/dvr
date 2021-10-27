<?php

namespace app\modules\dvr\components\onvif\wsdl;

class NTPInformation
{

    /**
     * @var boolean $FromDHCP
     */
    protected $FromDHCP = null;

    /**
     * @var NetworkHost[] $NTPFromDHCP
     */
    protected $NTPFromDHCP = null;

    /**
     * @var NetworkHost[] $NTPManual
     */
    protected $NTPManual = null;

    /**
     * @var NTPInformationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param boolean $FromDHCP
     */
    public function __construct($FromDHCP)
    {
      $this->FromDHCP = $FromDHCP;
    }

    /**
     * @return boolean
     */
    public function getFromDHCP()
    {
      return $this->FromDHCP;
    }

    /**
     * @param boolean $FromDHCP
     * @return \app\modules\dvr\components\onvif\wsdl\NTPInformation
     */
    public function setFromDHCP($FromDHCP)
    {
      $this->FromDHCP = $FromDHCP;
      return $this;
    }

    /**
     * @return NetworkHost[]
     */
    public function getNTPFromDHCP()
    {
      return $this->NTPFromDHCP;
    }

    /**
     * @param NetworkHost[] $NTPFromDHCP
     * @return \app\modules\dvr\components\onvif\wsdl\NTPInformation
     */
    public function setNTPFromDHCP(array $NTPFromDHCP = null)
    {
      $this->NTPFromDHCP = $NTPFromDHCP;
      return $this;
    }

    /**
     * @return NetworkHost[]
     */
    public function getNTPManual()
    {
      return $this->NTPManual;
    }

    /**
     * @param NetworkHost[] $NTPManual
     * @return \app\modules\dvr\components\onvif\wsdl\NTPInformation
     */
    public function setNTPManual(array $NTPManual = null)
    {
      $this->NTPManual = $NTPManual;
      return $this;
    }

    /**
     * @return NTPInformationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param NTPInformationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\NTPInformation
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
