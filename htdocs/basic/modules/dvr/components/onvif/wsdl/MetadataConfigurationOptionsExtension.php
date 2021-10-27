<?php

namespace app\modules\dvr\components\onvif\wsdl;

class MetadataConfigurationOptionsExtension
{

    /**
     * @var string[] $CompressionType
     */
    protected $CompressionType = null;

    /**
     * @var MetadataConfigurationOptionsExtension2 $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getCompressionType()
    {
      return $this->CompressionType;
    }

    /**
     * @param string[] $CompressionType
     * @return \app\modules\dvr\components\onvif\wsdl\MetadataConfigurationOptionsExtension
     */
    public function setCompressionType(array $CompressionType = null)
    {
      $this->CompressionType = $CompressionType;
      return $this;
    }

    /**
     * @return MetadataConfigurationOptionsExtension2
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param MetadataConfigurationOptionsExtension2 $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\MetadataConfigurationOptionsExtension
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
