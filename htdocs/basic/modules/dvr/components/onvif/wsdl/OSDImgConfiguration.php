<?php

namespace app\modules\dvr\components\onvif\wsdl;

class OSDImgConfiguration
{

    /**
     * @var anyURI $ImgPath
     */
    protected $ImgPath = null;

    /**
     * @var OSDImgConfigurationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param anyURI $ImgPath
     */
    public function __construct($ImgPath)
    {
      $this->ImgPath = $ImgPath;
    }

    /**
     * @return anyURI
     */
    public function getImgPath()
    {
      return $this->ImgPath;
    }

    /**
     * @param anyURI $ImgPath
     * @return \app\modules\dvr\components\onvif\wsdl\OSDImgConfiguration
     */
    public function setImgPath($ImgPath)
    {
      $this->ImgPath = $ImgPath;
      return $this;
    }

    /**
     * @return OSDImgConfigurationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param OSDImgConfigurationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\OSDImgConfiguration
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
