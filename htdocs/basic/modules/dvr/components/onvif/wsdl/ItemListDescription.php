<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ItemListDescription
{

    /**
     * @var SimpleItemDescription[] $SimpleItemDescription
     */
    protected $SimpleItemDescription = null;

    /**
     * @var ElementItemDescription[] $ElementItemDescription
     */
    protected $ElementItemDescription = null;

    /**
     * @var ItemListDescriptionExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SimpleItemDescription[]
     */
    public function getSimpleItemDescription()
    {
      return $this->SimpleItemDescription;
    }

    /**
     * @param SimpleItemDescription[] $SimpleItemDescription
     * @return \app\modules\dvr\components\onvif\wsdl\ItemListDescription
     */
    public function setSimpleItemDescription(array $SimpleItemDescription = null)
    {
      $this->SimpleItemDescription = $SimpleItemDescription;
      return $this;
    }

    /**
     * @return ElementItemDescription[]
     */
    public function getElementItemDescription()
    {
      return $this->ElementItemDescription;
    }

    /**
     * @param ElementItemDescription[] $ElementItemDescription
     * @return \app\modules\dvr\components\onvif\wsdl\ItemListDescription
     */
    public function setElementItemDescription(array $ElementItemDescription = null)
    {
      $this->ElementItemDescription = $ElementItemDescription;
      return $this;
    }

    /**
     * @return ItemListDescriptionExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ItemListDescriptionExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\ItemListDescription
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
