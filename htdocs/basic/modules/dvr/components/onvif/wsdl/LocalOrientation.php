<?php

namespace app\modules\dvr\components\onvif\wsdl;

class LocalOrientation
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var float $pan
     */
    protected $pan = null;

    /**
     * @var float $tilt
     */
    protected $tilt = null;

    /**
     * @var float $roll
     */
    protected $roll = null;

    /**
     * @param string $any
     * @param float $pan
     * @param float $tilt
     * @param float $roll
     */
    public function __construct($any, $pan, $tilt, $roll)
    {
      $this->any = $any;
      $this->pan = $pan;
      $this->tilt = $tilt;
      $this->roll = $roll;
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
     * @return \app\modules\dvr\components\onvif\wsdl\LocalOrientation
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return float
     */
    public function getPan()
    {
      return $this->pan;
    }

    /**
     * @param float $pan
     * @return \app\modules\dvr\components\onvif\wsdl\LocalOrientation
     */
    public function setPan($pan)
    {
      $this->pan = $pan;
      return $this;
    }

    /**
     * @return float
     */
    public function getTilt()
    {
      return $this->tilt;
    }

    /**
     * @param float $tilt
     * @return \app\modules\dvr\components\onvif\wsdl\LocalOrientation
     */
    public function setTilt($tilt)
    {
      $this->tilt = $tilt;
      return $this;
    }

    /**
     * @return float
     */
    public function getRoll()
    {
      return $this->roll;
    }

    /**
     * @param float $roll
     * @return \app\modules\dvr\components\onvif\wsdl\LocalOrientation
     */
    public function setRoll($roll)
    {
      $this->roll = $roll;
      return $this;
    }

}
