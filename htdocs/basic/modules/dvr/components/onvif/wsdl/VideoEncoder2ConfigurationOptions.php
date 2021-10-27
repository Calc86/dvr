<?php

namespace app\modules\dvr\components\onvif\wsdl;

class VideoEncoder2ConfigurationOptions
{

    /**
     * @var string $Encoding
     */
    protected $Encoding = null;

    /**
     * @var FloatRange $QualityRange
     */
    protected $QualityRange = null;

    /**
     * @var VideoResolution2[] $ResolutionsAvailable
     */
    protected $ResolutionsAvailable = null;

    /**
     * @var IntRange $BitrateRange
     */
    protected $BitrateRange = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var IntList $GovLengthRange
     */
    protected $GovLengthRange = null;

    /**
     * @var FloatList $FrameRatesSupported
     */
    protected $FrameRatesSupported = null;

    /**
     * @var StringAttrList $ProfilesSupported
     */
    protected $ProfilesSupported = null;

    /**
     * @var boolean $ConstantBitRateSupported
     */
    protected $ConstantBitRateSupported = null;

    /**
     * @var boolean $GuaranteedFrameRateSupported
     */
    protected $GuaranteedFrameRateSupported = null;

    /**
     * @param string $Encoding
     * @param FloatRange $QualityRange
     * @param VideoResolution2[] $ResolutionsAvailable
     * @param IntRange $BitrateRange
     * @param string $any
     * @param IntList $GovLengthRange
     * @param FloatList $FrameRatesSupported
     * @param StringAttrList $ProfilesSupported
     * @param boolean $ConstantBitRateSupported
     * @param boolean $GuaranteedFrameRateSupported
     */
    public function __construct($Encoding, $QualityRange, array $ResolutionsAvailable, $BitrateRange, $any, $GovLengthRange, $FrameRatesSupported, $ProfilesSupported, $ConstantBitRateSupported, $GuaranteedFrameRateSupported)
    {
      $this->Encoding = $Encoding;
      $this->QualityRange = $QualityRange;
      $this->ResolutionsAvailable = $ResolutionsAvailable;
      $this->BitrateRange = $BitrateRange;
      $this->any = $any;
      $this->GovLengthRange = $GovLengthRange;
      $this->FrameRatesSupported = $FrameRatesSupported;
      $this->ProfilesSupported = $ProfilesSupported;
      $this->ConstantBitRateSupported = $ConstantBitRateSupported;
      $this->GuaranteedFrameRateSupported = $GuaranteedFrameRateSupported;
    }

    /**
     * @return string
     */
    public function getEncoding()
    {
      return $this->Encoding;
    }

    /**
     * @param string $Encoding
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoder2ConfigurationOptions
     */
    public function setEncoding($Encoding)
    {
      $this->Encoding = $Encoding;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getQualityRange()
    {
      return $this->QualityRange;
    }

    /**
     * @param FloatRange $QualityRange
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoder2ConfigurationOptions
     */
    public function setQualityRange($QualityRange)
    {
      $this->QualityRange = $QualityRange;
      return $this;
    }

    /**
     * @return VideoResolution2[]
     */
    public function getResolutionsAvailable()
    {
      return $this->ResolutionsAvailable;
    }

    /**
     * @param VideoResolution2[] $ResolutionsAvailable
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoder2ConfigurationOptions
     */
    public function setResolutionsAvailable(array $ResolutionsAvailable)
    {
      $this->ResolutionsAvailable = $ResolutionsAvailable;
      return $this;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoder2ConfigurationOptions
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoder2ConfigurationOptions
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return IntList
     */
    public function getGovLengthRange()
    {
      return $this->GovLengthRange;
    }

    /**
     * @param IntList $GovLengthRange
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoder2ConfigurationOptions
     */
    public function setGovLengthRange($GovLengthRange)
    {
      $this->GovLengthRange = $GovLengthRange;
      return $this;
    }

    /**
     * @return FloatList
     */
    public function getFrameRatesSupported()
    {
      return $this->FrameRatesSupported;
    }

    /**
     * @param FloatList $FrameRatesSupported
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoder2ConfigurationOptions
     */
    public function setFrameRatesSupported($FrameRatesSupported)
    {
      $this->FrameRatesSupported = $FrameRatesSupported;
      return $this;
    }

    /**
     * @return StringAttrList
     */
    public function getProfilesSupported()
    {
      return $this->ProfilesSupported;
    }

    /**
     * @param StringAttrList $ProfilesSupported
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoder2ConfigurationOptions
     */
    public function setProfilesSupported($ProfilesSupported)
    {
      $this->ProfilesSupported = $ProfilesSupported;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getConstantBitRateSupported()
    {
      return $this->ConstantBitRateSupported;
    }

    /**
     * @param boolean $ConstantBitRateSupported
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoder2ConfigurationOptions
     */
    public function setConstantBitRateSupported($ConstantBitRateSupported)
    {
      $this->ConstantBitRateSupported = $ConstantBitRateSupported;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGuaranteedFrameRateSupported()
    {
      return $this->GuaranteedFrameRateSupported;
    }

    /**
     * @param boolean $GuaranteedFrameRateSupported
     * @return \app\modules\dvr\components\onvif\wsdl\VideoEncoder2ConfigurationOptions
     */
    public function setGuaranteedFrameRateSupported($GuaranteedFrameRateSupported)
    {
      $this->GuaranteedFrameRateSupported = $GuaranteedFrameRateSupported;
      return $this;
    }

}
