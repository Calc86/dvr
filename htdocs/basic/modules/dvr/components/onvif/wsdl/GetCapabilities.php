<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetCapabilities
{

    /**
     * @var CapabilityCategory $Category
     */
    protected $Category = null;

    /**
     * @param CapabilityCategory $Category
     */
    public function __construct($Category)
    {
      $this->Category = $Category;
    }

    /**
     * @return CapabilityCategory
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param CapabilityCategory $Category
     * @return \app\modules\dvr\components\onvif\wsdl\GetCapabilities
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

}
