<?php

namespace app\modules\dvr\components\onvif\wsdl;

class StartFirmwareUpgradeResponse
{

    /**
     * @var anyURI $UploadUri
     */
    protected $UploadUri = null;

    /**
     * @var duration $UploadDelay
     */
    protected $UploadDelay = null;

    /**
     * @var duration $ExpectedDownTime
     */
    protected $ExpectedDownTime = null;

    /**
     * @param anyURI $UploadUri
     * @param duration $UploadDelay
     * @param duration $ExpectedDownTime
     */
    public function __construct($UploadUri, $UploadDelay, $ExpectedDownTime)
    {
      $this->UploadUri = $UploadUri;
      $this->UploadDelay = $UploadDelay;
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
     * @return \app\modules\dvr\components\onvif\wsdl\StartFirmwareUpgradeResponse
     */
    public function setUploadUri($UploadUri)
    {
      $this->UploadUri = $UploadUri;
      return $this;
    }

    /**
     * @return duration
     */
    public function getUploadDelay()
    {
      return $this->UploadDelay;
    }

    /**
     * @param duration $UploadDelay
     * @return \app\modules\dvr\components\onvif\wsdl\StartFirmwareUpgradeResponse
     */
    public function setUploadDelay($UploadDelay)
    {
      $this->UploadDelay = $UploadDelay;
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
     * @return \app\modules\dvr\components\onvif\wsdl\StartFirmwareUpgradeResponse
     */
    public function setExpectedDownTime($ExpectedDownTime)
    {
      $this->ExpectedDownTime = $ExpectedDownTime;
      return $this;
    }

}
