<?php

namespace app\modules\dvr\components\onvif\wsdl;

class VideoRateControl2
{

    /**
     * @var float $FrameRateLimit
     */
    protected $FrameRateLimit = null;

    /**
     * @var int $BitrateLimit
     */
    protected $BitrateLimit = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var boolean $ConstantBitRate
     */
    protected $ConstantBitRate = null;

    /**
     * @param float $FrameRateLimit
     * @param int $BitrateLimit
     * @param string $any
     * @param boolean $ConstantBitRate
     */
    public function __construct($FrameRateLimit, $BitrateLimit, $any, $ConstantBitRate)
    {
      $this->FrameRateLimit = $FrameRateLimit;
      $this->BitrateLimit = $BitrateLimit;
      $this->any = $any;
      $this->ConstantBitRate = $ConstantBitRate;
    }

    /**
     * @return float
     */
    public function getFrameRateLimit()
    {
      return $this->FrameRateLimit;
    }

    /**
     * @param float $FrameRateLimit
     * @return \app\modules\dvr\components\onvif\wsdl\VideoRateControl2
     */
    public function setFrameRateLimit($FrameRateLimit)
    {
      $this->FrameRateLimit = $FrameRateLimit;
      return $this;
    }

    /**
     * @return int
     */
    public function getBitrateLimit()
    {
      return $this->BitrateLimit;
    }

    /**
     * @param int $BitrateLimit
     * @return \app\modules\dvr\components\onvif\wsdl\VideoRateControl2
     */
    public function setBitrateLimit($BitrateLimit)
    {
      $this->BitrateLimit = $BitrateLimit;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoRateControl2
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getConstantBitRate()
    {
      return $this->ConstantBitRate;
    }

    /**
     * @param boolean $ConstantBitRate
     * @return \app\modules\dvr\components\onvif\wsdl\VideoRateControl2
     */
    public function setConstantBitRate($ConstantBitRate)
    {
      $this->ConstantBitRate = $ConstantBitRate;
      return $this;
    }

}
