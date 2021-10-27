<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Mpeg4Options2 extends Mpeg4Options
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
     * @param Mpeg4Profile[] $Mpeg4ProfilesSupported
     * @param IntRange $BitrateRange
     * @param string $any
     */
    public function __construct(array $ResolutionsAvailable, $GovLengthRange, $FrameRateRange, $EncodingIntervalRange, array $Mpeg4ProfilesSupported, $BitrateRange, $any)
    {
      parent::__construct($ResolutionsAvailable, $GovLengthRange, $FrameRateRange, $EncodingIntervalRange, $Mpeg4ProfilesSupported);
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
     * @return \app\modules\dvr\components\onvif\wsdl\Mpeg4Options2
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
     * @return \app\modules\dvr\components\onvif\wsdl\Mpeg4Options2
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
