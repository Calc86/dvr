<?php

namespace app\modules\dvr\components\onvif\wsdl;

class DurationRange
{

    /**
     * @var duration $Min
     */
    protected $Min = null;

    /**
     * @var duration $Max
     */
    protected $Max = null;

    /**
     * @param duration $Min
     * @param duration $Max
     */
    public function __construct($Min, $Max)
    {
      $this->Min = $Min;
      $this->Max = $Max;
    }

    /**
     * @return duration
     */
    public function getMin()
    {
      return $this->Min;
    }

    /**
     * @param duration $Min
     * @return \app\modules\dvr\components\onvif\wsdl\DurationRange
     */
    public function setMin($Min)
    {
      $this->Min = $Min;
      return $this;
    }

    /**
     * @return duration
     */
    public function getMax()
    {
      return $this->Max;
    }

    /**
     * @param duration $Max
     * @return \app\modules\dvr\components\onvif\wsdl\DurationRange
     */
    public function setMax($Max)
    {
      $this->Max = $Max;
      return $this;
    }

}
