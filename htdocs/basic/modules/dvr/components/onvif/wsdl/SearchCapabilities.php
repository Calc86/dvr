<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SearchCapabilities
{

    /**
     * @var anyURI $XAddr
     */
    protected $XAddr = null;

    /**
     * @var boolean $MetadataSearch
     */
    protected $MetadataSearch = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param anyURI $XAddr
     * @param boolean $MetadataSearch
     * @param string $any
     */
    public function __construct($XAddr, $MetadataSearch, $any)
    {
      $this->XAddr = $XAddr;
      $this->MetadataSearch = $MetadataSearch;
      $this->any = $any;
    }

    /**
     * @return anyURI
     */
    public function getXAddr()
    {
      return $this->XAddr;
    }

    /**
     * @param anyURI $XAddr
     * @return \app\modules\dvr\components\onvif\wsdl\SearchCapabilities
     */
    public function setXAddr($XAddr)
    {
      $this->XAddr = $XAddr;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMetadataSearch()
    {
      return $this->MetadataSearch;
    }

    /**
     * @param boolean $MetadataSearch
     * @return \app\modules\dvr\components\onvif\wsdl\SearchCapabilities
     */
    public function setMetadataSearch($MetadataSearch)
    {
      $this->MetadataSearch = $MetadataSearch;
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
     * @return \app\modules\dvr\components\onvif\wsdl\SearchCapabilities
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
