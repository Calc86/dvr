<?php

namespace app\modules\dvr\components\onvif\wsdl;

class hexBinary
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var anonymous23 $contentType
     */
    protected $contentType = null;

    /**
     * @param string $_
     * @param anonymous23 $contentType
     */
    public function __construct($_, $contentType)
    {
      $this->_ = $_;
      $this->contentType = $contentType;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \app\modules\dvr\components\onvif\wsdl\hexBinary
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anonymous23
     */
    public function getContentType()
    {
      return $this->contentType;
    }

    /**
     * @param anonymous23 $contentType
     * @return \app\modules\dvr\components\onvif\wsdl\hexBinary
     */
    public function setContentType($contentType)
    {
      $this->contentType = $contentType;
      return $this;
    }

}
