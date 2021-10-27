<?php

namespace app\modules\dvr\components\onvif\wsdl;

class NetworkZeroConfigurationExtension
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var NetworkZeroConfiguration[] $Additional
     */
    protected $Additional = null;

    /**
     * @var NetworkZeroConfigurationExtension2 $Extension
     */
    protected $Extension = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      $this->any = $any;
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
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkZeroConfigurationExtension
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return NetworkZeroConfiguration[]
     */
    public function getAdditional()
    {
      return $this->Additional;
    }

    /**
     * @param NetworkZeroConfiguration[] $Additional
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkZeroConfigurationExtension
     */
    public function setAdditional(array $Additional = null)
    {
      $this->Additional = $Additional;
      return $this;
    }

    /**
     * @return NetworkZeroConfigurationExtension2
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param NetworkZeroConfigurationExtension2 $Extension
     * @return \app\modules\dvr\components\onvif\wsdl\NetworkZeroConfigurationExtension
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
