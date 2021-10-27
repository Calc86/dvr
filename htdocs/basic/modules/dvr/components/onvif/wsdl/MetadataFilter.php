<?php

namespace app\modules\dvr\components\onvif\wsdl;

class MetadataFilter
{

    /**
     * @var XPathExpression $MetadataStreamFilter
     */
    protected $MetadataStreamFilter = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param XPathExpression $MetadataStreamFilter
     * @param string $any
     */
    public function __construct($MetadataStreamFilter, $any)
    {
      $this->MetadataStreamFilter = $MetadataStreamFilter;
      $this->any = $any;
    }

    /**
     * @return XPathExpression
     */
    public function getMetadataStreamFilter()
    {
      return $this->MetadataStreamFilter;
    }

    /**
     * @param XPathExpression $MetadataStreamFilter
     * @return \app\modules\dvr\components\onvif\wsdl\MetadataFilter
     */
    public function setMetadataStreamFilter($MetadataStreamFilter)
    {
      $this->MetadataStreamFilter = $MetadataStreamFilter;
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
     * @return \app\modules\dvr\components\onvif\wsdl\MetadataFilter
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
