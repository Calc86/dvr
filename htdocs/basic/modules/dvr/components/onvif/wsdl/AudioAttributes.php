<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AudioAttributes
{

    /**
     * @var int $Bitrate
     */
    protected $Bitrate = null;

    /**
     * @var string $Encoding
     */
    protected $Encoding = null;

    /**
     * @var int $Samplerate
     */
    protected $Samplerate = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $Encoding
     * @param int $Samplerate
     * @param string $any
     */
    public function __construct($Encoding, $Samplerate, $any)
    {
      $this->Encoding = $Encoding;
      $this->Samplerate = $Samplerate;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getBitrate()
    {
      return $this->Bitrate;
    }

    /**
     * @param int $Bitrate
     * @return \app\modules\dvr\components\onvif\wsdl\AudioAttributes
     */
    public function setBitrate($Bitrate)
    {
      $this->Bitrate = $Bitrate;
      return $this;
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
     * @return \app\modules\dvr\components\onvif\wsdl\AudioAttributes
     */
    public function setEncoding($Encoding)
    {
      $this->Encoding = $Encoding;
      return $this;
    }

    /**
     * @return int
     */
    public function getSamplerate()
    {
      return $this->Samplerate;
    }

    /**
     * @param int $Samplerate
     * @return \app\modules\dvr\components\onvif\wsdl\AudioAttributes
     */
    public function setSamplerate($Samplerate)
    {
      $this->Samplerate = $Samplerate;
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
     * @return \app\modules\dvr\components\onvif\wsdl\AudioAttributes
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
