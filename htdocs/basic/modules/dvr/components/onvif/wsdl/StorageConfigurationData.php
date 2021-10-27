<?php

namespace app\modules\dvr\components\onvif\wsdl;

class StorageConfigurationData
{

    /**
     * @var anyURI $LocalPath
     */
    protected $LocalPath = null;

    /**
     * @var anyURI $StorageUri
     */
    protected $StorageUri = null;

    /**
     * @var UserCredential $User
     */
    protected $User = null;

    /**
     * @var Extension $Extension
     */
    protected $Extension = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @param string $type
     */
    public function __construct($type)
    {
      $this->type = $type;
    }

    /**
     * @return anyURI
     */
    public function getLocalPath()
    {
      return $this->LocalPath;
    }

    /**
     * @param anyURI $LocalPath
     * @return \app\modules\dvr\components\onvif\wsdl\StorageConfigurationData
     */
    public function setLocalPath($LocalPath)
    {
      $this->LocalPath = $LocalPath;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getStorageUri()
    {
      return $this->StorageUri;
    }

    /**
     * @param anyURI $StorageUri
     * @return \app\modules\dvr\components\onvif\wsdl\StorageConfigurationData
     */
    public function setStorageUri($StorageUri)
    {
      $this->StorageUri = $StorageUri;
      return $this;
    }

    /**
     * @return UserCredential
     */
    public function getUser()
    {
      return $this->User;
    }

    /**
     * @param UserCredential $User
     * @return \app\modules\dvr\components\onvif\wsdl\StorageConfigurationData
     */
    public function setUser($User)
    {
      $this->User = $User;
      return $this;
    }

    /**
     * @return Extension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param Extension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\StorageConfigurationData
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \app\modules\dvr\components\onvif\wsdl\StorageConfigurationData
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
