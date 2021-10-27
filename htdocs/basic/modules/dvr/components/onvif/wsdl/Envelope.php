<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Envelope
{

    /**
     * @var Header $Header
     */
    protected $Header = null;

    /**
     * @var Body $Body
     */
    protected $Body = null;

    /**
     * @param Header $Header
     * @param Body $Body
     */
    public function __construct($Header, $Body)
    {
      $this->Header = $Header;
      $this->Body = $Body;
    }

    /**
     * @return Header
     */
    public function getHeader()
    {
      return $this->Header;
    }

    /**
     * @param Header $Header
     * @return \app\modules\dvr\components\onvif\wsdl\Envelope
     */
    public function setHeader($Header)
    {
      $this->Header = $Header;
      return $this;
    }

    /**
     * @return Body
     */
    public function getBody()
    {
      return $this->Body;
    }

    /**
     * @param Body $Body
     * @return \app\modules\dvr\components\onvif\wsdl\Envelope
     */
    public function setBody($Body)
    {
      $this->Body = $Body;
      return $this;
    }

}
