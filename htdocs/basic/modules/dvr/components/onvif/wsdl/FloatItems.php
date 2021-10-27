<?php

namespace app\modules\dvr\components\onvif\wsdl;

class FloatItems
{

    /**
     * @var float[] $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float[]
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param float[] $Items
     * @return \app\modules\dvr\components\onvif\wsdl\FloatItems
     */
    public function setItems(array $Items = null)
    {
      $this->Items = $Items;
      return $this;
    }

}
