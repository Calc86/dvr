<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Dot11Status
{

    /**
     * @var Dot11SSIDType $SSID
     */
    protected $SSID = null;

    /**
     * @var string $BSSID
     */
    protected $BSSID = null;

    /**
     * @var Dot11Cipher $PairCipher
     */
    protected $PairCipher = null;

    /**
     * @var Dot11Cipher $GroupCipher
     */
    protected $GroupCipher = null;

    /**
     * @var Dot11SignalStrength $SignalStrength
     */
    protected $SignalStrength = null;

    /**
     * @var ReferenceToken $ActiveConfigAlias
     */
    protected $ActiveConfigAlias = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param Dot11SSIDType $SSID
     * @param ReferenceToken $ActiveConfigAlias
     * @param string $any
     */
    public function __construct($SSID, $ActiveConfigAlias, $any)
    {
      $this->SSID = $SSID;
      $this->ActiveConfigAlias = $ActiveConfigAlias;
      $this->any = $any;
    }

    /**
     * @return Dot11SSIDType
     */
    public function getSSID()
    {
      return $this->SSID;
    }

    /**
     * @param Dot11SSIDType $SSID
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11Status
     */
    public function setSSID($SSID)
    {
      $this->SSID = $SSID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBSSID()
    {
      return $this->BSSID;
    }

    /**
     * @param string $BSSID
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11Status
     */
    public function setBSSID($BSSID)
    {
      $this->BSSID = $BSSID;
      return $this;
    }

    /**
     * @return Dot11Cipher
     */
    public function getPairCipher()
    {
      return $this->PairCipher;
    }

    /**
     * @param Dot11Cipher $PairCipher
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11Status
     */
    public function setPairCipher($PairCipher)
    {
      $this->PairCipher = $PairCipher;
      return $this;
    }

    /**
     * @return Dot11Cipher
     */
    public function getGroupCipher()
    {
      return $this->GroupCipher;
    }

    /**
     * @param Dot11Cipher $GroupCipher
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11Status
     */
    public function setGroupCipher($GroupCipher)
    {
      $this->GroupCipher = $GroupCipher;
      return $this;
    }

    /**
     * @return Dot11SignalStrength
     */
    public function getSignalStrength()
    {
      return $this->SignalStrength;
    }

    /**
     * @param Dot11SignalStrength $SignalStrength
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11Status
     */
    public function setSignalStrength($SignalStrength)
    {
      $this->SignalStrength = $SignalStrength;
      return $this;
    }

    /**
     * @return ReferenceToken
     */
    public function getActiveConfigAlias()
    {
      return $this->ActiveConfigAlias;
    }

    /**
     * @param ReferenceToken $ActiveConfigAlias
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11Status
     */
    public function setActiveConfigAlias($ActiveConfigAlias)
    {
      $this->ActiveConfigAlias = $ActiveConfigAlias;
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
     * @return \app\modules\dvr\components\onvif\wsdl\Dot11Status
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
