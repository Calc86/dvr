<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetStorageConfigurationsResponse
{

    /**
     * @var StorageConfiguration $StorageConfigurations
     */
    protected $StorageConfigurations = null;

    /**
     * @param StorageConfiguration $StorageConfigurations
     */
    public function __construct($StorageConfigurations)
    {
      $this->StorageConfigurations = $StorageConfigurations;
    }

    /**
     * @return StorageConfiguration
     */
    public function getStorageConfigurations()
    {
      return $this->StorageConfigurations;
    }

    /**
     * @param StorageConfiguration $StorageConfigurations
     * @return \app\modules\dvr\components\onvif\wsdl\GetStorageConfigurationsResponse
     */
    public function setStorageConfigurations($StorageConfigurations)
    {
      $this->StorageConfigurations = $StorageConfigurations;
      return $this;
    }

}
