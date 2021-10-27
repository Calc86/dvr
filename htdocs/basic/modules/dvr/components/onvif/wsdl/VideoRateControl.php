<?php

namespace app\modules\dvr\components\onvif\wsdl;

class VideoRateControl
{

    /**
     * @var int $FrameRateLimit
     */
    protected $FrameRateLimit = null;

    /**
     * @var int $EncodingInterval
     */
    protected $EncodingInterval = null;

    /**
     * @var int $BitrateLimit
     */
    protected $BitrateLimit = null;

    /**
     * @param int $FrameRateLimit
     * @param int $EncodingInterval
     * @param int $BitrateLimit
     */
    public function __construct($FrameRateLimit, $EncodingInterval, $BitrateLimit)
    {
      $this->FrameRateLimit = $FrameRateLimit;
      $this->EncodingInterval = $EncodingInterval;
      $this->BitrateLimit = $BitrateLimit;
    }

    /**
     * @return int
     */
    public function getFrameRateLimit()
    {
      return $this->FrameRateLimit;
    }

    /**
     * @param int $FrameRateLimit
     * @return \app\modules\dvr\components\onvif\wsdl\VideoRateControl
     */
    public function setFrameRateLimit($FrameRateLimit)
    {
      $this->FrameRateLimit = $FrameRateLimit;
      return $this;
    }

    /**
     * @return int
     */
    public function getEncodingInterval()
    {
      return $this->EncodingInterval;
    }

    /**
     * @param int $EncodingInterval
     * @return \app\modules\dvr\components\onvif\wsdl\VideoRateControl
     */
    public function setEncodingInterval($EncodingInterval)
    {
      $this->EncodingInterval = $EncodingInterval;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoRateControl
     */
    public function setBitrateLimit($BitrateLimit)
    {
      $this->BitrateLimit = $BitrateLimit;
      return $this;
    }

}
