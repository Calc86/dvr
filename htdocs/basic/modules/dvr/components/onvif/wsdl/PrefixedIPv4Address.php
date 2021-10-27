<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PrefixedIPv4Address
{

    /**
     * @var IPv4Address $Address
     */
    protected $Address = null;

    /**
     * @var int $PrefixLength
     */
    protected $PrefixLength = null;

    /**
     * @param IPv4Address $Address
     * @param int $PrefixLength
     */
    public function __construct($Address, $PrefixLength)
    {
      $this->Address = $Address;
      $this->PrefixLength = $PrefixLength;
    }

    /**
     * @return IPv4Address
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param IPv4Address $Address
     * @return \app\modules\dvr\components\onvif\wsdl\PrefixedIPv4Address
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return int
     */
    public function getPrefixLength()
    {
      return $this->PrefixLength;
    }

    /**
     * @param int $PrefixLength
     * @return \app\modules\dvr\components\onvif\wsdl\PrefixedIPv4Address
     */
    public function setPrefixLength($PrefixLength)
    {
      $this->PrefixLength = $PrefixLength;
      return $this;
    }

}
