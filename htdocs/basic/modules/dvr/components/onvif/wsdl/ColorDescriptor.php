<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ColorDescriptor
{

    /**
     * @var ColorCluster[] $ColorCluster
     */
    protected $ColorCluster = null;

    /**
     * @var anyType $Extension
     */
    protected $Extension = null;

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
     * @return ColorCluster[]
     */
    public function getColorCluster()
    {
      return $this->ColorCluster;
    }

    /**
     * @param ColorCluster[] $ColorCluster
     * @return \app\modules\dvr\components\onvif\wsdl\ColorDescriptor
     */
    public function setColorCluster(array $ColorCluster = null)
    {
      $this->ColorCluster = $ColorCluster;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param anyType $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\ColorDescriptor
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
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
     * @return \app\modules\dvr\components\onvif\wsdl\ColorDescriptor
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
