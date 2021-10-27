<?php

namespace app\modules\dvr\components\onvif\wsdl;

class PrefixedIPv6Address
{

    /**
     * @var IPv6Address $Address
     */
    protected $Address = null;

    /**
     * @var int $PrefixLength
     */
    protected $PrefixLength = null;

    /**
     * @param IPv6Address $Address
     * @param int $PrefixLength
     */
    public function __construct($Address, $PrefixLength)
    {
      $this->Address = $Address;
      $this->PrefixLength = $PrefixLength;
    }

    /**
     * @return IPv6Address
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param IPv6Address $Address
     * @return \app\modules\dvr\components\onvif\wsdl\PrefixedIPv6Address
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
     * @return \app\modules\dvr\components\onvif\wsdl\PrefixedIPv6Address
     */
    public function setPrefixLength($PrefixLength)
    {
      $this->PrefixLength = $PrefixLength;
      return $this;
    }

}
