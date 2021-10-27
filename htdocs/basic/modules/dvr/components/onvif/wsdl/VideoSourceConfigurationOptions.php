<?php

namespace app\modules\dvr\components\onvif\wsdl;

class VideoSourceConfigurationOptions
{

    /**
     * @var IntRectangleRange $BoundsRange
     */
    protected $BoundsRange = null;

    /**
     * @var ReferenceToken[] $VideoSourceTokensAvailable
     */
    protected $VideoSourceTokensAvailable = null;

    /**
     * @var VideoSourceConfigurationOptionsExtension $Extension
     */
    protected $Extension = null;

    /**
     * @var int $MaximumNumberOfProfiles
     */
    protected $MaximumNumberOfProfiles = null;

    /**
     * @param IntRectangleRange $BoundsRange
     * @param ReferenceToken[] $VideoSourceTokensAvailable
     * @param int $MaximumNumberOfProfiles
     */
    public function __construct($BoundsRange, array $VideoSourceTokensAvailable, $MaximumNumberOfProfiles)
    {
      $this->BoundsRange = $BoundsRange;
      $this->VideoSourceTokensAvailable = $VideoSourceTokensAvailable;
      $this->MaximumNumberOfProfiles = $MaximumNumberOfProfiles;
    }

    /**
     * @return IntRectangleRange
     */
    public function getBoundsRange()
    {
      return $this->BoundsRange;
    }

    /**
     * @param IntRectangleRange $BoundsRange
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSourceConfigurationOptions
     */
    public function setBoundsRange($BoundsRange)
    {
      $this->BoundsRange = $BoundsRange;
      return $this;
    }

    /**
     * @return ReferenceToken[]
     */
    public function getVideoSourceTokensAvailable()
    {
      return $this->VideoSourceTokensAvailable;
    }

    /**
     * @param ReferenceToken[] $VideoSourceTokensAvailable
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSourceConfigurationOptions
     */
    public function setVideoSourceTokensAvailable(array $VideoSourceTokensAvailable)
    {
      $this->VideoSourceTokensAvailable = $VideoSourceTokensAvailable;
      return $this;
    }

    /**
     * @return VideoSourceConfigurationOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param VideoSourceConfigurationOptionsExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSourceConfigurationOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumNumberOfProfiles()
    {
      return $this->MaximumNumberOfProfiles;
    }

    /**
     * @param int $MaximumNumberOfProfiles
     * @return \app\modules\dvr\components\onvif\wsdl\VideoSourceConfigurationOptions
     */
    public function setMaximumNumberOfProfiles($MaximumNumberOfProfiles)
    {
      $this->MaximumNumberOfProfiles = $MaximumNumberOfProfiles;
      return $this;
    }

}
