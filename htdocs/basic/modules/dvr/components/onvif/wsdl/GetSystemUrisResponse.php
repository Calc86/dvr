<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetSystemUrisResponse
{

    /**
     * @var SystemLogUriList $SystemLogUris
     */
    protected $SystemLogUris = null;

    /**
     * @var anyURI $SupportInfoUri
     */
    protected $SupportInfoUri = null;

    /**
     * @var anyURI $SystemBackupUri
     */
    protected $SystemBackupUri = null;

    /**
     * @var Extension $Extension
     */
    protected $Extension = null;

    /**
     * @param SystemLogUriList $SystemLogUris
     * @param anyURI $SupportInfoUri
     * @param anyURI $SystemBackupUri
     * @param Extension $Extension
     */
    public function __construct($SystemLogUris, $SupportInfoUri, $SystemBackupUri, $Extension)
    {
      $this->SystemLogUris = $SystemLogUris;
      $this->SupportInfoUri = $SupportInfoUri;
      $this->SystemBackupUri = $SystemBackupUri;
      $this->Extension = $Extension;
    }

    /**
     * @return SystemLogUriList
     */
    public function getSystemLogUris()
    {
      return $this->SystemLogUris;
    }

    /**
     * @param SystemLogUriList $SystemLogUris
     * @return \app\modules\dvr\components\onvif\wsdl\GetSystemUrisResponse
     */
    public function setSystemLogUris($SystemLogUris)
    {
      $this->SystemLogUris = $SystemLogUris;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getSupportInfoUri()
    {
      return $this->SupportInfoUri;
    }

    /**
     * @param anyURI $SupportInfoUri
     * @return \app\modules\dvr\components\onvif\wsdl\GetSystemUrisResponse
     */
    public function setSupportInfoUri($SupportInfoUri)
    {
      $this->SupportInfoUri = $SupportInfoUri;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getSystemBackupUri()
    {
      return $this->SystemBackupUri;
    }

    /**
     * @param anyURI $SystemBackupUri
     * @return \app\modules\dvr\components\onvif\wsdl\GetSystemUrisResponse
     */
    public function setSystemBackupUri($SystemBackupUri)
    {
      $this->SystemBackupUri = $SystemBackupUri;
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
     * @return \app\modules\dvr\components\onvif\wsdl\GetSystemUrisResponse
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
