<?php

namespace app\modules\dvr\components\onvif\wsdl;

class LayoutOptions
{

    /**
     * @var PaneLayoutOptions[] $PaneLayoutOptions
     */
    protected $PaneLayoutOptions = null;

    /**
     * @var LayoutOptionsExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param PaneLayoutOptions[] $PaneLayoutOptions
     */
    public function __construct(array $PaneLayoutOptions)
    {
      $this->PaneLayoutOptions = $PaneLayoutOptions;
    }

    /**
     * @return PaneLayoutOptions[]
     */
    public function getPaneLayoutOptions()
    {
      return $this->PaneLayoutOptions;
    }

    /**
     * @param PaneLayoutOptions[] $PaneLayoutOptions
     * @return \app\modules\dvr\components\onvif\wsdl\LayoutOptions
     */
    public function setPaneLayoutOptions(array $PaneLayoutOptions)
    {
      $this->PaneLayoutOptions = $PaneLayoutOptions;
      return $this;
    }

    /**
     * @return LayoutOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param LayoutOptionsExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\LayoutOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
