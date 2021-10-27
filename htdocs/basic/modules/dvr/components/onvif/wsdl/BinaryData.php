<?php

namespace app\modules\dvr\components\onvif\wsdl;

class BinaryData
{

    /**
     * @var base64Binary $Data
     */
    protected $Data = null;

    /**
     * @var anonymous23 $contentType
     */
    protected $contentType = null;

    /**
     * @param anonymous23 $contentType
     */
    public function __construct($contentType)
    {
      $this->contentType = $contentType;
    }

    /**
     * @return base64Binary
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param base64Binary $Data
     * @return \app\modules\dvr\components\onvif\wsdl\BinaryData
     */
    public function setData($Data)
    {
      $this->Data = $Data;
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
     * @return \app\modules\dvr\components\onvif\wsdl\BinaryData
     */
    public function setContentType($contentType)
    {
      $this->contentType = $contentType;
      return $this;
    }

}
