<?php

namespace app\modules\dvr\components\onvif\wsdl;

class StartSystemRestoreResponse
{

    /**
     * @var anyURI $UploadUri
     */
    protected $UploadUri = null;

    /**
     * @var duration $ExpectedDownTime
     */
    protected $ExpectedDownTime = null;

    /**
     * @param anyURI $UploadUri
     * @param duration $ExpectedDownTime
     */
    public function __construct($UploadUri, $ExpectedDownTime)
    {
      $this->UploadUri = $UploadUri;
      $this->ExpectedDownTime = $ExpectedDownTime;
    }

    /**
     * @return anyURI
     */
    public function getUploadUri()
    {
      return $this->UploadUri;
    }

    /**
     * @param anyURI $UploadUri
     * @return \app\modules\dvr\components\onvif\wsdl\StartSystemRestoreResponse
     */
    public function setUploadUri($UploadUri)
    {
      $this->UploadUri = $UploadUri;
      return $this;
    }

    /**
     * @return duration
     */
    public function getExpectedDownTime()
    {
      return $this->ExpectedDownTime;
    }

    /**
     * @param duration $ExpectedDownTime
     * @return \app\modules\dvr\components\onvif\wsdl\StartSystemRestoreResponse
     */
    public function setExpectedDownTime($ExpectedDownTime)
    {
      $this->ExpectedDownTime = $ExpectedDownTime;
      return $this;
    }

}
