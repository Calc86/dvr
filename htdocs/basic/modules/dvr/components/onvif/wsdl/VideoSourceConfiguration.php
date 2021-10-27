<?php

namespace app\modules\dvr\components\onvif\wsdl;

class VideoSourceConfiguration extends ConfigurationEntity
{

    /**
     * @var ReferenceToken $SourceToken
     */
    protected $SourceToken = null;

    /**
     * @var IntRectangle $Bounds
     */
    protected $Bounds = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var VideoSourceConfigurationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @var string $ViewMode
     */
    protected $ViewMode = null;

    /**
     * @param Name $Name
     * @param int $UseCount
     * @param ReferenceToken $token
     * @param ReferenceToken $SourceToken
     * @param IntRectangle $Bounds
     * @param string $any
     * @param string $ViewMode
     */
    public function __construct($Name, $UseCount, $token, $SourceToken, $Bounds, $any, $ViewMode)
    {
      parent::__construct($Name, $UseCount, $token);
      $this->SourceToken = $SourceToken;
      $this->Bounds = $Bounds;
      $this->any = $any;
      $this->ViewMode = $ViewMode;
    }

    /**
     * @return ReferenceToken
     */
    public function getSourceToken()
    {
      return $this->SourceToken;
    }

    /**
     * @param ReferenceToken $SourceToken
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSourceConfiguration
     */
    public function setSourceToken($SourceToken)
    {
      $this->SourceToken = $SourceToken;
      return $this;
    }

    /**
     * @return IntRectangle
     */
    public function getBounds()
    {
      return $this->Bounds;
    }

    /**
     * @param IntRectangle $Bounds
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSourceConfiguration
     */
    public function setBounds($Bounds)
    {
      $this->Bounds = $Bounds;
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
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSourceConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return VideoSourceConfigurationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param VideoSourceConfigurationExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSourceConfiguration
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return string
     */
    public function getViewMode()
    {
      return $this->ViewMode;
    }

    /**
     * @param string $ViewMode
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSourceConfiguration
     */
    public function setViewMode($ViewMode)
    {
      $this->ViewMode = $ViewMode;
      return $this;
    }

}
