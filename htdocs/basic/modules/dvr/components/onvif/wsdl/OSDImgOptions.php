<?php

namespace app\modules\dvr\components\onvif\wsdl;

class OSDImgOptions
{

    /**
     * @var anyURI[] $ImagePath
     */
    protected $ImagePath = null;

    /**
     * @var OSDImgOptionsExtension $Extension
     */
    protected $Extension = null;

    /**
     * @var StringAttrList $FormatsSupported
     */
    protected $FormatsSupported = null;

    /**
     * @var int $MaxSize
     */
    protected $MaxSize = null;

    /**
     * @var int $MaxWidth
     */
    protected $MaxWidth = null;

    /**
     * @var int $MaxHeight
     */
    protected $MaxHeight = null;

    /**
     * @param anyURI[] $ImagePath
     * @param StringAttrList $FormatsSupported
     * @param int $MaxSize
     * @param int $MaxWidth
     * @param int $MaxHeight
     */
    public function __construct(array $ImagePath, $FormatsSupported, $MaxSize, $MaxWidth, $MaxHeight)
    {
      $this->ImagePath = $ImagePath;
      $this->FormatsSupported = $FormatsSupported;
      $this->MaxSize = $MaxSize;
      $this->MaxWidth = $MaxWidth;
      $this->MaxHeight = $MaxHeight;
    }

    /**
     * @return anyURI[]
     */
    public function getImagePath()
    {
      return $this->ImagePath;
    }

    /**
     * @param anyURI[] $ImagePath
     * @return \app\modules\dvr\components\onvif\wsdl\OSDImgOptions
     */
    public function setImagePath(array $ImagePath)
    {
      $this->ImagePath = $ImagePath;
      return $this;
    }

    /**
     * @return OSDImgOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param OSDImgOptionsExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\OSDImgOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return StringAttrList
     */
    public function getFormatsSupported()
    {
      return $this->FormatsSupported;
    }

    /**
     * @param StringAttrList $FormatsSupported
     * @return \app\modules\dvr\components\onvif\wsdl\OSDImgOptions
     */
    public function setFormatsSupported($FormatsSupported)
    {
      $this->FormatsSupported = $FormatsSupported;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxSize()
    {
      return $this->MaxSize;
    }

    /**
     * @param int $MaxSize
     * @return \app\modules\dvr\components\onvif\wsdl\OSDImgOptions
     */
    public function setMaxSize($MaxSize)
    {
      $this->MaxSize = $MaxSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxWidth()
    {
      return $this->MaxWidth;
    }

    /**
     * @param int $MaxWidth
     * @return \app\modules\dvr\components\onvif\wsdl\OSDImgOptions
     */
    public function setMaxWidth($MaxWidth)
    {
      $this->MaxWidth = $MaxWidth;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxHeight()
    {
      return $this->MaxHeight;
    }

    /**
     * @param int $MaxHeight
     * @return \app\modules\dvr\components\onvif\wsdl\OSDImgOptions
     */
    public function setMaxHeight($MaxHeight)
    {
      $this->MaxHeight = $MaxHeight;
      return $this;
    }

}
