<?php

namespace app\modules\dvr\components\onvif\wsdl;

class GetIPAddressFilterResponse
{

    /**
     * @var IPAddressFilter $IPAddressFilter
     */
    protected $IPAddressFilter = null;

    /**
     * @param IPAddressFilter $IPAddressFilter
     */
    public function __construct($IPAddressFilter)
    {
      $this->IPAddressFilter = $IPAddressFilter;
    }

    /**
     * @return IPAddressFilter
     */
    public function getIPAddressFilter()
    {
      return $this->IPAddressFilter;
    }

    /**
     * @param IPAddressFilter $IPAddressFilter
     * @return \app\modules\dvr\components\onvif\wsdl\GetIPAddressFilterResponse
     */
    public function setIPAddressFilter($IPAddressFilter)
    {
      $this->IPAddressFilter = $IPAddressFilter;
      return $this;
    }

}
