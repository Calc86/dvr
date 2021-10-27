<?php

namespace app\modules\dvr\components\onvif\wsdl;

class IntRange
{

    /**
     * @var int $Min
     */
    protected $Min = null;

    /**
     * @var int $Max
     */
    protected $Max = null;

    /**
     * @param int $Min
     * @param int $Max
     */
    public function __construct($Min, $Max)
    {
      $this->Min = $Min;
      $this->Max = $Max;
    }

    /**
     * @return int
     */
    public function getMin()
    {
      return $this->Min;
    }

    /**
     * @param int $Min
     * @return \app\modules\dvr\components\onvif\wsdl\IntRange
     */
    public function setMin($Min)
    {
      $this->Min = $Min;
      return $this;
    }

    /**
     * @return int
     */
    public function getMax()
    {
      return $this->Max;
    }

    /**
     * @param int $Max
     * @return \app\modules\dvr\components\onvif\wsdl\IntRange
     */
    public function setMax($Max)
    {
      $this->Max = $Max;
      return $this;
    }

}
