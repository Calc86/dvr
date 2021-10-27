<?php

namespace app\modules\dvr\components\onvif\wsdl;

class H264Options2 extends H264Options
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
     * @param IntRange $GovLengthRange
     * @param IntRange $FrameRateRange
     * @param IntRange $EncodingIntervalRange
     * @param H264Profile[] $H264ProfilesSupported
     * @param IntRange $BitrateRange
     * @param string $any
     */
    public function __construct(array $ResolutionsAvailable, $GovLengthRange, $FrameRateRange, $EncodingIntervalRange, array $H264ProfilesSupported, $BitrateRange, $any)
    {
      parent::__construct($ResolutionsAvailable, $GovLengthRange, $FrameRateRange, $EncodingIntervalRange, $H264ProfilesSupported);
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
     * @return \app\modules\dvr\components\onvif\wsdl\H264Options2
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
     * @return \app\modules\dvr\components\onvif\wsdl\H264Options2
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
