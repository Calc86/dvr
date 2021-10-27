<?php

namespace app\modules\dvr\components\onvif\wsdl;

class VideoResolution2
{

    /**
     * @var int $Width
     */
    protected $Width = null;

    /**
     * @var int $Height
     */
    protected $Height = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $Width
     * @param int $Height
     * @param string $any
     */
    public function __construct($Width, $Height, $any)
    {
      $this->Width = $Width;
      $this->Height = $Height;
      $this->any = $any;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoResolution2
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoResolution2
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoResolution2
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
