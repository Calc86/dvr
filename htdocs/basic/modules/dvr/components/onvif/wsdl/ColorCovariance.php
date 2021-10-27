<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ColorCovariance
{

    /**
     * @var float $XX
     */
    protected $XX = null;

    /**
     * @var float $YY
     */
    protected $YY = null;

    /**
     * @var float $ZZ
     */
    protected $ZZ = null;

    /**
     * @var float $XY
     */
    protected $XY = null;

    /**
     * @var float $XZ
     */
    protected $XZ = null;

    /**
     * @var float $YZ
     */
    protected $YZ = null;

    /**
     * @var anyURI $Colorspace
     */
    protected $Colorspace = null;

    /**
     * @param float $XX
     * @param float $YY
     * @param float $ZZ
     * @param float $XY
     * @param float $XZ
     * @param float $YZ
     * @param anyURI $Colorspace
     */
    public function __construct($XX, $YY, $ZZ, $XY, $XZ, $YZ, $Colorspace)
    {
      $this->XX = $XX;
      $this->YY = $YY;
      $this->ZZ = $ZZ;
      $this->XY = $XY;
      $this->XZ = $XZ;
      $this->YZ = $YZ;
      $this->Colorspace = $Colorspace;
    }

    /**
     * @return float
     */
    public function getXX()
    {
      return $this->XX;
    }

    /**
     * @param float $XX
     * @return \app\modules\dvr\components\onvif\wsdl\ColorCovariance
     */
    public function setXX($XX)
    {
      $this->XX = $XX;
      return $this;
    }

    /**
     * @return float
     */
    public function getYY()
    {
      return $this->YY;
    }

    /**
     * @param float $YY
     * @return \app\modules\dvr\components\onvif\wsdl\ColorCovariance
     */
    public function setYY($YY)
    {
      $this->YY = $YY;
      return $this;
    }

    /**
     * @return float
     */
    public function getZZ()
    {
      return $this->ZZ;
    }

    /**
     * @param float $ZZ
     * @return \app\modules\dvr\components\onvif\wsdl\ColorCovariance
     */
    public function setZZ($ZZ)
    {
      $this->ZZ = $ZZ;
      return $this;
    }

    /**
     * @return float
     */
    public function getXY()
    {
      return $this->XY;
    }

    /**
     * @param float $XY
     * @return \app\modules\dvr\components\onvif\wsdl\ColorCovariance
     */
    public function setXY($XY)
    {
      $this->XY = $XY;
      return $this;
    }

    /**
     * @return float
     */
    public function getXZ()
    {
      return $this->XZ;
    }

    /**
     * @param float $XZ
     * @return \app\modules\dvr\components\onvif\wsdl\ColorCovariance
     */
    public function setXZ($XZ)
    {
      $this->XZ = $XZ;
      return $this;
    }

    /**
     * @return float
     */
    public function getYZ()
    {
      return $this->YZ;
    }

    /**
     * @param float $YZ
     * @return \app\modules\dvr\components\onvif\wsdl\ColorCovariance
     */
    public function setYZ($YZ)
    {
      $this->YZ = $YZ;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getColorspace()
    {
      return $this->Colorspace;
    }

    /**
     * @param anyURI $Colorspace
     * @return \app\modules\dvr\components\onvif\wsdl\ColorCovariance
     */
    public function setColorspace($Colorspace)
    {
      $this->Colorspace = $Colorspace;
      return $this;
    }

}
