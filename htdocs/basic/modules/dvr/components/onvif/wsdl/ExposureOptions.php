<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ExposureOptions
{

    /**
     * @var ExposureMode[] $Mode
     */
    protected $Mode = null;

    /**
     * @var ExposurePriority[] $Priority
     */
    protected $Priority = null;

    /**
     * @var FloatRange $MinExposureTime
     */
    protected $MinExposureTime = null;

    /**
     * @var FloatRange $MaxExposureTime
     */
    protected $MaxExposureTime = null;

    /**
     * @var FloatRange $MinGain
     */
    protected $MinGain = null;

    /**
     * @var FloatRange $MaxGain
     */
    protected $MaxGain = null;

    /**
     * @var FloatRange $MinIris
     */
    protected $MinIris = null;

    /**
     * @var FloatRange $MaxIris
     */
    protected $MaxIris = null;

    /**
     * @var FloatRange $ExposureTime
     */
    protected $ExposureTime = null;

    /**
     * @var FloatRange $Gain
     */
    protected $Gain = null;

    /**
     * @var FloatRange $Iris
     */
    protected $Iris = null;

    /**
     * @param ExposureMode[] $Mode
     * @param ExposurePriority[] $Priority
     * @param FloatRange $MinExposureTime
     * @param FloatRange $MaxExposureTime
     * @param FloatRange $MinGain
     * @param FloatRange $MaxGain
     * @param FloatRange $MinIris
     * @param FloatRange $MaxIris
     * @param FloatRange $ExposureTime
     * @param FloatRange $Gain
     * @param FloatRange $Iris
     */
    public function __construct(array $Mode, array $Priority, $MinExposureTime, $MaxExposureTime, $MinGain, $MaxGain, $MinIris, $MaxIris, $ExposureTime, $Gain, $Iris)
    {
      $this->Mode = $Mode;
      $this->Priority = $Priority;
      $this->MinExposureTime = $MinExposureTime;
      $this->MaxExposureTime = $MaxExposureTime;
      $this->MinGain = $MinGain;
      $this->MaxGain = $MaxGain;
      $this->MinIris = $MinIris;
      $this->MaxIris = $MaxIris;
      $this->ExposureTime = $ExposureTime;
      $this->Gain = $Gain;
      $this->Iris = $Iris;
    }

    /**
     * @return ExposureMode[]
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param ExposureMode[] $Mode
     * @return \app\modules\dvr\components\onvif\wsdl\ExposureOptions
     */
    public function setMode(array $Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return ExposurePriority[]
     */
    public function getPriority()
    {
      return $this->Priority;
    }

    /**
     * @param ExposurePriority[] $Priority
     * @return \app\modules\dvr\components\onvif\wsdl\ExposureOptions
     */
    public function setPriority(array $Priority)
    {
      $this->Priority = $Priority;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getMinExposureTime()
    {
      return $this->MinExposureTime;
    }

    /**
     * @param FloatRange $MinExposureTime
     * @return \app\modules\dvr\components\onvif\wsdl\ExposureOptions
     */
    public function setMinExposureTime($MinExposureTime)
    {
      $this->MinExposureTime = $MinExposureTime;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getMaxExposureTime()
    {
      return $this->MaxExposureTime;
    }

    /**
     * @param FloatRange $MaxExposureTime
     * @return \app\modules\dvr\components\onvif\wsdl\ExposureOptions
     */
    public function setMaxExposureTime($MaxExposureTime)
    {
      $this->MaxExposureTime = $MaxExposureTime;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getMinGain()
    {
      return $this->MinGain;
    }

    /**
     * @param FloatRange $MinGain
     * @return \app\modules\dvr\components\onvif\wsdl\ExposureOptions
     */
    public function setMinGain($MinGain)
    {
      $this->MinGain = $MinGain;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getMaxGain()
    {
      return $this->MaxGain;
    }

    /**
     * @param FloatRange $MaxGain
     * @return \app\modules\dvr\components\onvif\wsdl\ExposureOptions
     */
    public function setMaxGain($MaxGain)
    {
      $this->MaxGain = $MaxGain;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getMinIris()
    {
      return $this->MinIris;
    }

    /**
     * @param FloatRange $MinIris
     * @return \app\modules\dvr\components\onvif\wsdl\ExposureOptions
     */
    public function setMinIris($MinIris)
    {
      $this->MinIris = $MinIris;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getMaxIris()
    {
      return $this->MaxIris;
    }

    /**
     * @param FloatRange $MaxIris
     * @return \app\modules\dvr\components\onvif\wsdl\ExposureOptions
     */
    public function setMaxIris($MaxIris)
    {
      $this->MaxIris = $MaxIris;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getExposureTime()
    {
      return $this->ExposureTime;
    }

    /**
     * @param FloatRange $ExposureTime
     * @return \app\modules\dvr\components\onvif\wsdl\ExposureOptions
     */
    public function setExposureTime($ExposureTime)
    {
      $this->ExposureTime = $ExposureTime;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getGain()
    {
      return $this->Gain;
    }

    /**
     * @param FloatRange $Gain
     * @return \app\modules\dvr\components\onvif\wsdl\ExposureOptions
     */
    public function setGain($Gain)
    {
      $this->Gain = $Gain;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getIris()
    {
      return $this->Iris;
    }

    /**
     * @param FloatRange $Iris
     * @return \app\modules\dvr\components\onvif\wsdl\ExposureOptions
     */
    public function setIris($Iris)
    {
      $this->Iris = $Iris;
      return $this;
    }

}
