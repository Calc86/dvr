<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PTZNode extends DeviceEntity
{

    /**
     * @var Name $Name
     */
    protected $Name = null;

    /**
     * @var PTZSpaces $SupportedPTZSpaces
     */
    protected $SupportedPTZSpaces = null;

    /**
     * @var int $MaximumNumberOfPresets
     */
    protected $MaximumNumberOfPresets = null;

    /**
     * @var boolean $HomeSupported
     */
    protected $HomeSupported = null;

    /**
     * @var AuxiliaryData[] $AuxiliaryCommands
     */
    protected $AuxiliaryCommands = null;

    /**
     * @var PTZNodeExtension $Extension
     */
    protected $Extension = null;

    /**
     * @var boolean $FixedHomePosition
     */
    protected $FixedHomePosition = null;

    /**
     * @var boolean $GeoMove
     */
    protected $GeoMove = null;

    /**
     * @param ReferenceToken $token
     * @param PTZSpaces $SupportedPTZSpaces
     * @param int $MaximumNumberOfPresets
     * @param boolean $HomeSupported
     * @param boolean $FixedHomePosition
     * @param boolean $GeoMove
     */
    public function __construct($token, $SupportedPTZSpaces, $MaximumNumberOfPresets, $HomeSupported, $FixedHomePosition, $GeoMove)
    {
      parent::__construct($token);
      $this->SupportedPTZSpaces = $SupportedPTZSpaces;
      $this->MaximumNumberOfPresets = $MaximumNumberOfPresets;
      $this->HomeSupported = $HomeSupported;
      $this->FixedHomePosition = $FixedHomePosition;
      $this->GeoMove = $GeoMove;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \app\modules\dvr\components\onvif\wsdl\PTZNode
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return PTZSpaces
     */
    public function getSupportedPTZSpaces()
    {
      return $this->SupportedPTZSpaces;
    }

    /**
     * @param PTZSpaces $SupportedPTZSpaces
     * @return \app\modules\dvr\components\onvif\wsdl\PTZNode
     */
    public function setSupportedPTZSpaces($SupportedPTZSpaces)
    {
      $this->SupportedPTZSpaces = $SupportedPTZSpaces;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumNumberOfPresets()
    {
      return $this->MaximumNumberOfPresets;
    }

    /**
     * @param int $MaximumNumberOfPresets
     * @return \app\modules\dvr\components\onvif\wsdl\PTZNode
     */
    public function setMaximumNumberOfPresets($MaximumNumberOfPresets)
    {
      $this->MaximumNumberOfPresets = $MaximumNumberOfPresets;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHomeSupported()
    {
      return $this->HomeSupported;
    }

    /**
     * @param boolean $HomeSupported
     * @return \app\modules\dvr\components\onvif\wsdl\PTZNode
     */
    public function setHomeSupported($HomeSupported)
    {
      $this->HomeSupported = $HomeSupported;
      return $this;
    }

    /**
     * @return AuxiliaryData[]
     */
    public function getAuxiliaryCommands()
    {
      return $this->AuxiliaryCommands;
    }

    /**
     * @param AuxiliaryData[] $AuxiliaryCommands
     * @return \app\modules\dvr\components\onvif\wsdl\PTZNode
     */
    public function setAuxiliaryCommands(array $AuxiliaryCommands = null)
    {
      $this->AuxiliaryCommands = $AuxiliaryCommands;
      return $this;
    }

    /**
     * @return PTZNodeExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param PTZNodeExtension $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\PTZNode
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFixedHomePosition()
    {
      return $this->FixedHomePosition;
    }

    /**
     * @param boolean $FixedHomePosition
     * @return \app\modules\dvr\components\onvif\wsdl\PTZNode
     */
    public function setFixedHomePosition($FixedHomePosition)
    {
      $this->FixedHomePosition = $FixedHomePosition;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGeoMove()
    {
      return $this->GeoMove;
    }

    /**
     * @param boolean $GeoMove
     * @return \app\modules\dvr\components\onvif\wsdl\PTZNode
     */
    public function setGeoMove($GeoMove)
    {
      $this->GeoMove = $GeoMove;
      return $this;
    }

}
