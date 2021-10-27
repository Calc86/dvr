<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetRecordingJobsResponseItem
{

    /**
     * @var RecordingJobReference $JobToken
     */
    protected $JobToken = null;

    /**
     * @var RecordingJobConfiguration $JobConfiguration
     */
    protected $JobConfiguration = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param RecordingJobReference $JobToken
     * @param RecordingJobConfiguration $JobConfiguration
     * @param string $any
     */
    public function __construct($JobToken, $JobConfiguration, $any)
    {
      $this->JobToken = $JobToken;
      $this->JobConfiguration = $JobConfiguration;
      $this->any = $any;
    }

    /**
     * @return RecordingJobReference
     */
    public function getJobToken()
    {
      return $this->JobToken;
    }

    /**
     * @param RecordingJobReference $JobToken
     * @return \app\modules\dvr\components\onvif\wsdl\GetRecordingJobsResponseItem
     */
    public function setJobToken($JobToken)
    {
      $this->JobToken = $JobToken;
      return $this;
    }

    /**
     * @return RecordingJobConfiguration
     */
    public function getJobConfiguration()
    {
      return $this->JobConfiguration;
    }

    /**
     * @param RecordingJobConfiguration $JobConfiguration
     * @return \app\modules\dvr\components\onvif\wsdl\GetRecordingJobsResponseItem
     */
    public function setJobConfiguration($JobConfiguration)
    {
      $this->JobConfiguration = $JobConfiguration;
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
     * @return \app\modules\dvr\components\onvif\wsdl\GetRecordingJobsResponseItem
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
