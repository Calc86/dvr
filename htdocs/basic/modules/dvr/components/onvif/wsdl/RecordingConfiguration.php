<?php

namespace app\modules\dvr\components\onvif\wsdl;

class RecordingConfiguration
{

    /**
     * @var RecordingSourceInformation $Source
     */
    protected $Source = null;

    /**
     * @var Description $Content
     */
    protected $Content = null;

    /**
     * @var duration $MaximumRetentionTime
     */
    protected $MaximumRetentionTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param RecordingSourceInformation $Source
     * @param Description $Content
     * @param duration $MaximumRetentionTime
     * @param string $any
     */
    public function __construct($Source, $Content, $MaximumRetentionTime, $any)
    {
      $this->Source = $Source;
      $this->Content = $Content;
      $this->MaximumRetentionTime = $MaximumRetentionTime;
      $this->any = $any;
    }

    /**
     * @return RecordingSourceInformation
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param RecordingSourceInformation $Source
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingConfiguration
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return Description
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param Description $Content
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingConfiguration
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

    /**
     * @return duration
     */
    public function getMaximumRetentionTime()
    {
      return $this->MaximumRetentionTime;
    }

    /**
     * @param duration $MaximumRetentionTime
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingConfiguration
     */
    public function setMaximumRetentionTime($MaximumRetentionTime)
    {
      $this->MaximumRetentionTime = $MaximumRetentionTime;
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
     * @return \app\modules\dvr\components\onvif\wsdl\RecordingConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
