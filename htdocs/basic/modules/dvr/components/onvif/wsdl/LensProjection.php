<?php

namespace app\modules\dvr\components\onvif\wsdl;

class LensProjection
{

    /**
     * @var float $Angle
     */
    protected $Angle = null;

    /**
     * @var float $Radius
     */
    protected $Radius = null;

    /**
     * @var float $Transmittance
     */
    protected $Transmittance = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param float $Angle
     * @param float $Radius
     * @param string $any
     */
    public function __construct($Angle, $Radius, $any)
    {
      $this->Angle = $Angle;
      $this->Radius = $Radius;
      $this->any = $any;
    }

    /**
     * @return float
     */
    public function getAngle()
    {
      return $this->Angle;
    }

    /**
     * @param float $Angle
     * @return \app\modules\dvr\components\onvif\wsdl\LensProjection
     */
    public function setAngle($Angle)
    {
      $this->Angle = $Angle;
      return $this;
    }

    /**
     * @return float
     */
    public function getRadius()
    {
      return $this->Radius;
    }

    /**
     * @param float $Radius
     * @return \app\modules\dvr\components\onvif\wsdl\LensProjection
     */
    public function setRadius($Radius)
    {
      $this->Radius = $Radius;
      return $this;
    }

    /**
     * @return float
     */
    public function getTransmittance()
    {
      return $this->Transmittance;
    }

    /**
     * @param float $Transmittance
     * @return \app\modules\dvr\components\onvif\wsdl\LensProjection
     */
    public function setTransmittance($Transmittance)
    {
      $this->Transmittance = $Transmittance;
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
     * @return \app\modules\dvr\components\onvif\wsdl\LensProjection
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
