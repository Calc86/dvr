<?php

namespace app\modules\dvr\components\onvif\wsdl;

class VideoSourceConfigurationExtension2
{

    /**
     * @var LensDescription[] $LensDescription
     */
    protected $LensDescription = null;

    /**
     * @var SceneOrientation $SceneOrientation
     */
    protected $SceneOrientation = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      $this->any = $any;
    }

    /**
     * @return LensDescription[]
     */
    public function getLensDescription()
    {
      return $this->LensDescription;
    }

    /**
     * @param LensDescription[] $LensDescription
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSourceConfigurationExtension2
     */
    public function setLensDescription(array $LensDescription = null)
    {
      $this->LensDescription = $LensDescription;
      return $this;
    }

    /**
     * @return SceneOrientation
     */
    public function getSceneOrientation()
    {
      return $this->SceneOrientation;
    }

    /**
     * @param SceneOrientation $SceneOrientation
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSourceConfigurationExtension2
     */
    public function setSceneOrientation($SceneOrientation)
    {
      $this->SceneOrientation = $SceneOrientation;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSourceConfigurationExtension2
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
