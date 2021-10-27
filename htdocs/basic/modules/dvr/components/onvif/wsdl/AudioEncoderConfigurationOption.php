<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AudioEncoderConfigurationOption
{

    /**
     * @var AudioEncoding $Encoding
     */
    protected $Encoding = null;

    /**
     * @var IntItems $BitrateList
     */
    protected $BitrateList = null;

    /**
     * @var IntItems $SampleRateList
     */
    protected $SampleRateList = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param AudioEncoding $Encoding
     * @param IntItems $BitrateList
     * @param IntItems $SampleRateList
     * @param string $any
     */
    public function __construct($Encoding, $BitrateList, $SampleRateList, $any)
    {
      $this->Encoding = $Encoding;
      $this->BitrateList = $BitrateList;
      $this->SampleRateList = $SampleRateList;
      $this->any = $any;
    }

    /**
     * @return AudioEncoding
     */
    public function getEncoding()
    {
      return $this->Encoding;
    }

    /**
     * @param AudioEncoding $Encoding
     * @return \app\modules\dvr\components\onvif\wsdl\AudioEncoderConfigurationOption
     */
    public function setEncoding($Encoding)
    {
      $this->Encoding = $Encoding;
      return $this;
    }

    /**
     * @return IntItems
     */
    public function getBitrateList()
    {
      return $this->BitrateList;
    }

    /**
     * @param IntItems $BitrateList
     * @return \app\modules\dvr\components\onvif\wsdl\AudioEncoderConfigurationOption
     */
    public function setBitrateList($BitrateList)
    {
      $this->BitrateList = $BitrateList;
      return $this;
    }

    /**
     * @return IntItems
     */
    public function getSampleRateList()
    {
      return $this->SampleRateList;
    }

    /**
     * @param IntItems $SampleRateList
     * @return \app\modules\dvr\components\onvif\wsdl\AudioEncoderConfigurationOption
     */
    public function setSampleRateList($SampleRateList)
    {
      $this->SampleRateList = $SampleRateList;
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
     * @return \app\modules\dvr\components\onvif\wsdl\AudioEncoderConfigurationOption
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
