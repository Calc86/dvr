<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SetNTP
{

    /**
     * @var boolean $FromDHCP
     */
    protected $FromDHCP = null;

    /**
     * @var NetworkHost $NTPManual
     */
    protected $NTPManual = null;

    /**
     * @param boolean $FromDHCP
     * @param NetworkHost $NTPManual
     */
    public function __construct($FromDHCP, $NTPManual)
    {
      $this->FromDHCP = $FromDHCP;
      $this->NTPManual = $NTPManual;
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
     * @return \app\modules\dvr\components\onvif\wsdl\SetNTP
     */
    public function setFromDHCP($FromDHCP)
    {
      $this->FromDHCP = $FromDHCP;
      return $this;
    }

    /**
     * @return NetworkHost
     */
    public function getNTPManual()
    {
      return $this->NTPManual;
    }

    /**
     * @param NetworkHost $NTPManual
     * @return \app\modules\dvr\components\onvif\wsdl\SetNTP
     */
    public function setNTPManual($NTPManual)
    {
      $this->NTPManual = $NTPManual;
      return $this;
    }

}
