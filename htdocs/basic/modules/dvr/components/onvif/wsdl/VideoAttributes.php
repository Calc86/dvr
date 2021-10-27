<?php

namespace app\modules\dvr\components\onvif\wsdl;

class VideoAttributes
{

    /**
     * @var int $Bitrate
     */
    protected $Bitrate = null;

    /**
     * @var int $Width
     */
    protected $Width = null;

    /**
     * @var int $Height
     */
    protected $Height = null;

    /**
     * @var string $Encoding
     */
    protected $Encoding = null;

    /**
     * @var float $Framerate
     */
    protected $Framerate = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $Width
     * @param int $Height
     * @param string $Encoding
     * @param float $Framerate
     * @param string $any
     */
    public function __construct($Width, $Height, $Encoding, $Framerate, $any)
    {
      $this->Width = $Width;
      $this->Height = $Height;
      $this->Encoding = $Encoding;
      $this->Framerate = $Framerate;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoAttributes
     */
    public function setBitrate($Bitrate)
    {
      $this->Bitrate = $Bitrate;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param int $Width
     * @return \app\modules\dvr\components\onvif\wsdl\VideoAttributes
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param int $Height
     * @return \app\modules\dvr\components\onvif\wsdl\VideoAttributes
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoAttributes
     */
    public function setEncoding($Encoding)
    {
      $this->Encoding = $Encoding;
      return $this;
    }

    /**
     * @return float
     */
    public function getFramerate()
    {
      return $this->Framerate;
    }

    /**
     * @param float $Framerate
     * @return \app\modules\dvr\components\onvif\wsdl\VideoAttributes
     */
    public function setFramerate($Framerate)
    {
      $this->Framerate = $Framerate;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoAttributes
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
