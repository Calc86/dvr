<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PTZPresetTourPresetDetail
{

    /**
     * @var ReferenceToken $PresetToken
     */
    protected $PresetToken = null;

    /**
     * @var boolean $Home
     */
    protected $Home = null;

    /**
     * @var PTZVector $PTZPosition
     */
    protected $PTZPosition = null;

    /**
     * @var PTZPresetTourTypeExtension $TypeExtension
     */
    protected $TypeExtension = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ReferenceToken $PresetToken
     * @param boolean $Home
     * @param PTZVector $PTZPosition
     * @param PTZPresetTourTypeExtension $TypeExtension
     * @param string $any
     */
    public function __construct($PresetToken, $Home, $PTZPosition, $TypeExtension, $any)
    {
      $this->PresetToken = $PresetToken;
      $this->Home = $Home;
      $this->PTZPosition = $PTZPosition;
      $this->TypeExtension = $TypeExtension;
      $this->any = $any;
    }

    /**
     * @return ReferenceToken
     */
    public function getPresetToken()
    {
      return $this->PresetToken;
    }

    /**
     * @param ReferenceToken $PresetToken
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourPresetDetail
     */
    public function setPresetToken($PresetToken)
    {
      $this->PresetToken = $PresetToken;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHome()
    {
      return $this->Home;
    }

    /**
     * @param boolean $Home
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourPresetDetail
     */
    public function setHome($Home)
    {
      $this->Home = $Home;
      return $this;
    }

    /**
     * @return PTZVector
     */
    public function getPTZPosition()
    {
      return $this->PTZPosition;
    }

    /**
     * @param PTZVector $PTZPosition
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourPresetDetail
     */
    public function setPTZPosition($PTZPosition)
    {
      $this->PTZPosition = $PTZPosition;
      return $this;
    }

    /**
     * @return PTZPresetTourTypeExtension
     */
    public function getTypeExtension()
    {
      return $this->TypeExtension;
    }

    /**
     * @param PTZPresetTourTypeExtension $TypeExtension
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourPresetDetail
     */
    public function setTypeExtension($TypeExtension)
    {
      $this->TypeExtension = $TypeExtension;
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
     * @return \app\modules\dvr\components\onvif\wsdl\PTZPresetTourPresetDetail
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
