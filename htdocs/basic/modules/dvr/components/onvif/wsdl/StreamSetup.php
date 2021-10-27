<?php

namespace app\modules\dvr\components\onvif\wsdl;

class StreamSetup
{

    /**
     * @var StreamType $Stream
     */
    protected $Stream = null;

    /**
     * @var Transport $Transport
     */
    protected $Transport = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param StreamType $Stream
     * @param Transport $Transport
     * @param string $any
     */
    public function __construct($Stream, $Transport, $any)
    {
      $this->Stream = $Stream;
      $this->Transport = $Transport;
      $this->any = $any;
    }

    /**
     * @return StreamType
     */
    public function getStream()
    {
      return $this->Stream;
    }

    /**
     * @param StreamType $Stream
     * @return \app\modules\dvr\components\onvif\wsdl\StreamSetup
     */
    public function setStream($Stream)
    {
      $this->Stream = $Stream;
      return $this;
    }

    /**
     * @return Transport
     */
    public function getTransport()
    {
      return $this->Transport;
    }

    /**
     * @param Transport $Transport
     * @return \app\modules\dvr\components\onvif\wsdl\StreamSetup
     */
    public function setTransport($Transport)
    {
      $this->Transport = $Transport;
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
     * @return \app\modules\dvr\components\onvif\wsdl\StreamSetup
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
