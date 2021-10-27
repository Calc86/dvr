<?php

namespace app\modules\dvr\components\onvif\wsdl;

class VideoOutput extends DeviceEntity
{

    /**
     * @var Layout $Layout
     */
    protected $Layout = null;

    /**
     * @var VideoResolution $Resolution
     */
    protected $Resolution = null;

    /**
     * @var float $RefreshRate
     */
    protected $RefreshRate = null;

    /**
     * @var float $AspectRatio
     */
    protected $AspectRatio = null;

    /**
     * @var VideoOutputExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param ReferenceToken $token
     * @param Layout $Layout
     */
    public function __construct($token, $Layout)
    {
      parent::__construct($token);
      $this->Layout = $Layout;
    }

    /**
     * @return Layout
     */
    public function getLayout()
    {
      return $this->Layout;
    }

    /**
     * @param Layout $Layout
     * @return \app\modules\dvr\components\onvif\wsdl\VideoOutput
     */
    public function setLayout($Layout)
    {
      $this->Layout = $Layout;
      return $this;
    }

    /**
     * @return VideoResolution
     */
    public function getResolution()
    {
      return $this->Resolution;
    }

    /**
     * @param VideoResolution $Resolution
     * @return \app\modules\dvr\components\onvif\wsdl\VideoOutput
     */
    public function setResolution($Resolution)
    {
      $this->Resolution = $Resolution;
      return $this;
    }

    /**
     * @return float
     */
    public function getRefreshRate()
    {
      return $this->RefreshRate;
    }

    /**
     * @param float $RefreshRate
     * @return \app\modules\dvr\components\onvif\wsdl\VideoOutput
     */
    public function setRefreshRate($RefreshRate)
    {
      $this->RefreshRate = $RefreshRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getAspectRatio()
    {
      return $this->AspectRatio;
    }

    /**
     * @param float $AspectRatio
     * @return \app\modules\dvr\components\onvif\wsdl\VideoOutput
     */
    public function setAspectRatio($AspectRatio)
    {
      $this->AspectRatio = $AspectRatio;
      return $this;
    }

    /**
     * @return VideoOutputExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param VideoOutputExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\VideoOutput
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
