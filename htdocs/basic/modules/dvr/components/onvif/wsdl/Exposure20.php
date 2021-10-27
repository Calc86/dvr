<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Exposure20
{

    /**
     * @var ExposureMode $Mode
     */
    protected $Mode = null;

    /**
     * @var ExposurePriority $Priority
     */
    protected $Priority = null;

    /**
     * @var Rectangle $Window
     */
    protected $Window = null;

    /**
     * @var float $MinExposureTime
     */
    protected $MinExposureTime = null;

    /**
     * @var float $MaxExposureTime
     */
    protected $MaxExposureTime = null;

    /**
     * @var float $MinGain
     */
    protected $MinGain = null;

    /**
     * @var float $MaxGain
     */
    protected $MaxGain = null;

    /**
     * @var float $MinIris
     */
    protected $MinIris = null;

    /**
     * @var float $MaxIris
     */
    protected $MaxIris = null;

    /**
     * @var float $ExposureTime
     */
    protected $ExposureTime = null;

    /**
     * @var float $Gain
     */
    protected $Gain = null;

    /**
     * @var float $Iris
     */
    protected $Iris = null;

    /**
     * @param ExposureMode $Mode
     */
    public function __construct($Mode)
    {
      $this->Mode = $Mode;
    }

    /**
     * @return ExposureMode
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param ExposureMode $Mode
     * @return \app\modules\dvr\components\onvif\wsdl\Exposure20
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return ExposurePriority
     */
    public function getPriority()
    {
      return $this->Priority;
    }

    /**
     * @param ExposurePriority $Priority
     * @return \app\modules\dvr\components\onvif\wsdl\Exposure20
     */
    public function setPriority($Priority)
    {
      $this->Priority = $Priority;
      return $this;
    }

    /**
     * @return Rectangle
     */
    public function getWindow()
    {
      return $this->Window;
    }

    /**
     * @param Rectangle $Window
     * @return \app\modules\dvr\components\onvif\wsdl\Exposure20
     */
    public function setWindow($Window)
    {
      $this->Window = $Window;
      return $this;
    }

    /**
     * @return float
     */
    public function getMinExposureTime()
    {
      return $this->MinExposureTime;
    }

    /**
     * @param float $MinExposureTime
     * @return \app\modules\dvr\components\onvif\wsdl\Exposure20
     */
    public function setMinExposureTime($MinExposureTime)
    {
      $this->MinExposureTime = $MinExposureTime;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaxExposureTime()
    {
      return $this->MaxExposureTime;
    }

    /**
     * @param float $MaxExposureTime
     * @return \app\modules\dvr\components\onvif\wsdl\Exposure20
     */
    public function setMaxExposureTime($MaxExposureTime)
    {
      $this->MaxExposureTime = $MaxExposureTime;
      return $this;
    }

    /**
     * @return float
     */
    public function getMinGain()
    {
      return $this->MinGain;
    }

    /**
     * @param float $MinGain
     * @return \app\modules\dvr\components\onvif\wsdl\Exposure20
     */
    public function setMinGain($MinGain)
    {
      $this->MinGain = $MinGain;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaxGain()
    {
      return $this->MaxGain;
    }

    /**
     * @param float $MaxGain
     * @return \app\modules\dvr\components\onvif\wsdl\Exposure20
     */
    public function setMaxGain($MaxGain)
    {
      $this->MaxGain = $MaxGain;
      return $this;
    }

    /**
     * @return float
     */
    public function getMinIris()
    {
      return $this->MinIris;
    }

    /**
     * @param float $MinIris
     * @return \app\modules\dvr\components\onvif\wsdl\Exposure20
     */
    public function setMinIris($MinIris)
    {
      $this->MinIris = $MinIris;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaxIris()
    {
      return $this->MaxIris;
    }

    /**
     * @param float $MaxIris
     * @return \app\modules\dvr\components\onvif\wsdl\Exposure20
     */
    public function setMaxIris($MaxIris)
    {
      $this->MaxIris = $MaxIris;
      return $this;
    }

    /**
     * @return float
     */
    public function getExposureTime()
    {
      return $this->ExposureTime;
    }

    /**
     * @param float $ExposureTime
     * @return \app\modules\dvr\components\onvif\wsdl\Exposure20
     */
    public function setExposureTime($ExposureTime)
    {
      $this->ExposureTime = $ExposureTime;
      return $this;
    }

    /**
     * @return float
     */
    public function getGain()
    {
      return $this->Gain;
    }

    /**
     * @param float $Gain
     * @return \app\modules\dvr\components\onvif\wsdl\Exposure20
     */
    public function setGain($Gain)
    {
      $this->Gain = $Gain;
      return $this;
    }

    /**
     * @return float
     */
    public function getIris()
    {
      return $this->Iris;
    }

    /**
     * @param float $Iris
     * @return \app\modules\dvr\components\onvif\wsdl\Exposure20
     */
    public function setIris($Iris)
    {
      $this->Iris = $Iris;
      return $this;
    }

}
