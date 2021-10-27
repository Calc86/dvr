<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ActiveConnection
{

    /**
     * @var float $CurrentBitrate
     */
    protected $CurrentBitrate = null;

    /**
     * @var float $CurrentFps
     */
    protected $CurrentFps = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param float $CurrentBitrate
     * @param float $CurrentFps
     * @param string $any
     */
    public function __construct($CurrentBitrate, $CurrentFps, $any)
    {
      $this->CurrentBitrate = $CurrentBitrate;
      $this->CurrentFps = $CurrentFps;
      $this->any = $any;
    }

    /**
     * @return float
     */
    public function getCurrentBitrate()
    {
      return $this->CurrentBitrate;
    }

    /**
     * @param float $CurrentBitrate
     * @return \app\modules\dvr\components\onvif\wsdl\ActiveConnection
     */
    public function setCurrentBitrate($CurrentBitrate)
    {
      $this->CurrentBitrate = $CurrentBitrate;
      return $this;
    }

    /**
     * @return float
     */
    public function getCurrentFps()
    {
      return $this->CurrentFps;
    }

    /**
     * @param float $CurrentFps
     * @return \app\modules\dvr\components\onvif\wsdl\ActiveConnection
     */
    public function setCurrentFps($CurrentFps)
    {
      $this->CurrentFps = $CurrentFps;
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
     * @return \app\modules\dvr\components\onvif\wsdl\ActiveConnection
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
