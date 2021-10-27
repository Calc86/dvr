<?php

namespace app\modules\dvr\components\onvif\wsdl;

class JpegOptions2 extends JpegOptions
{

    /**
     * @var IntRange $BitrateRange
     */
    protected $BitrateRange = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param VideoResolution[] $ResolutionsAvailable
     * @param IntRange $FrameRateRange
     * @param IntRange $EncodingIntervalRange
     * @param IntRange $BitrateRange
     * @param string $any
     */
    public function __construct(array $ResolutionsAvailable, $FrameRateRange, $EncodingIntervalRange, $BitrateRange, $any)
    {
      parent::__construct($ResolutionsAvailable, $FrameRateRange, $EncodingIntervalRange);
      $this->BitrateRange = $BitrateRange;
      $this->any = $any;
    }

    /**
     * @return IntRange
     */
    public function getBitrateRange()
    {
      return $this->BitrateRange;
    }

    /**
     * @param IntRange $BitrateRange
     * @return \app\modules\dvr\components\onvif\wsdl\JpegOptions2
     */
    public function setBitrateRange($BitrateRange)
    {
      $this->BitrateRange = $BitrateRange;
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
     * @return \app\modules\dvr\components\onvif\wsdl\JpegOptions2
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
