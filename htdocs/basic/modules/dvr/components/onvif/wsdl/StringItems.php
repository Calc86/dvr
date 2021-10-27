<?php

namespace app\modules\dvr\components\onvif\wsdl;

class StringItems
{

    /**
     * @var string $Item
     */
    protected $Item = null;

    /**
     * @param string $Item
     */
    public function __construct($Item)
    {
      $this->Item = $Item;
    }

    /**
     * @return string
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param string $Item
     * @return \app\modules\dvr\components\onvif\wsdl\StringItems
     */
    public function setItem($Item)
    {
      $this->Item = $Item;
      return $this;
    }

}
