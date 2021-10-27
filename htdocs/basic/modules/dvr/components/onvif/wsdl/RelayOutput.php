<?php

namespace app\modules\dvr\components\onvif\wsdl;

class RelayOutput extends DeviceEntity
{

    /**
     * @var RelayOutputSettings $Properties
     */
    protected $Properties = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ReferenceToken $token
     * @param RelayOutputSettings $Properties
     * @param string $any
     */
    public function __construct($token, $Properties, $any)
    {
      parent::__construct($token);
      $this->Properties = $Properties;
      $this->any = $any;
    }

    /**
     * @return RelayOutputSettings
     */
    public function getProperties()
    {
      return $this->Properties;
    }

    /**
     * @param RelayOutputSettings $Properties
     * @return \app\modules\dvr\components\onvif\wsdl\RelayOutput
     */
    public function setProperties($Properties)
    {
      $this->Properties = $Properties;
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
     * @return \app\modules\dvr\components\onvif\wsdl\RelayOutput
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
