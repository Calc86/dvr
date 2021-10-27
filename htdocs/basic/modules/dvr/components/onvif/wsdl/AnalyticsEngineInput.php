<?php

namespace app\modules\dvr\components\onvif\wsdl;

class AnalyticsEngineInput extends ConfigurationEntity
{

    /**
     * @var SourceIdentification $SourceIdentification
     */
    protected $SourceIdentification = null;

    /**
     * @var VideoEncoderConfiguration $VideoInput
     */
    protected $VideoInput = null;

    /**
     * @var MetadataInput $MetadataInput
     */
    protected $MetadataInput = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param Name $Name
     * @param int $UseCount
     * @param ReferenceToken $token
     * @param SourceIdentification $SourceIdentification
     * @param VideoEncoderConfiguration $VideoInput
     * @param MetadataInput $MetadataInput
     * @param string $any
     */
    public function __construct($Name, $UseCount, $token, $SourceIdentification, $VideoInput, $MetadataInput, $any)
    {
      parent::__construct($Name, $UseCount, $token);
      $this->SourceIdentification = $SourceIdentification;
      $this->VideoInput = $VideoInput;
      $this->MetadataInput = $MetadataInput;
      $this->any = $any;
    }

    /**
     * @return SourceIdentification
     */
    public function getSourceIdentification()
    {
      return $this->SourceIdentification;
    }

    /**
     * @param SourceIdentification $SourceIdentification
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsEngineInput
     */
    public function setSourceIdentification($SourceIdentification)
    {
      $this->SourceIdentification = $SourceIdentification;
      return $this;
    }

    /**
     * @return VideoEncoderConfiguration
     */
    public function getVideoInput()
    {
      return $this->VideoInput;
    }

    /**
     * @param VideoEncoderConfiguration $VideoInput
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsEngineInput
     */
    public function setVideoInput($VideoInput)
    {
      $this->VideoInput = $VideoInput;
      return $this;
    }

    /**
     * @return MetadataInput
     */
    public function getMetadataInput()
    {
      return $this->MetadataInput;
    }

    /**
     * @param MetadataInput $MetadataInput
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsEngineInput
     */
    public function setMetadataInput($MetadataInput)
    {
      $this->MetadataInput = $MetadataInput;
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
     * @return \app\modules\dvr\components\onvif\wsdl\AnalyticsEngineInput
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
