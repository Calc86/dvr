<?php

namespace app\modules\dvr\components\onvif\wsdl;

class base64Binary
{

    /**
     * @var base64Binary $_
     */
    protected $_ = null;

    /**
     * @var anonymous23 $contentType
     */
    protected $contentType = null;

    /**
     * @param base64Binary $_
     * @param anonymous23 $contentType
     */
    public function __construct($_, $contentType)
    {
      $this->_ = $_;
      $this->contentType = $contentType;
    }

    /**
     * @return base64Binary
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param base64Binary $_
     * @return \app\modules\dvr\components\onvif\wsdl\base64Binary
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
     * @return \app\modules\dvr\components\onvif\wsdl\base64Binary
     */
    public function setContentType($contentType)
    {
      $this->contentType = $contentType;
      return $this;
    }

}
