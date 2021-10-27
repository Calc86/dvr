<?php

namespace app\modules\dvr\components\onvif\wsdl;

class VideoSourceExtension
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var ImagingSettings20 $Imaging
     */
    protected $Imaging = null;

    /**
     * @var VideoSourceExtension2 $Extension
     */
    protected $Extension = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      $this->any = $any;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSourceExtension
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return ImagingSettings20
     */
    public function getImaging()
    {
      return $this->Imaging;
    }

    /**
     * @param ImagingSettings20 $Imaging
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSourceExtension
     */
    public function setImaging($Imaging)
    {
      $this->Imaging = $Imaging;
      return $this;
    }

    /**
     * @return VideoSourceExtension2
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param VideoSourceExtension2 $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSourceExtension
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
