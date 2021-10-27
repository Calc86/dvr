<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ErrorCode
{

    /**
     * @var anyType $_
     */
    protected $_ = null;

    /**
     * @var anyURI $dialect
     */
    protected $dialect = null;

    /**
     * @param anyType $_
     * @param anyURI $dialect
     */
    public function __construct($_, $dialect)
    {
      $this->_ = $_;
      $this->dialect = $dialect;
    }

    /**
     * @return anyType
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param anyType $_
     * @return \app\modules\dvr\components\onvif\wsdl\ErrorCode
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getDialect()
    {
      return $this->dialect;
    }

    /**
     * @param anyURI $dialect
     * @return \app\modules\dvr\components\onvif\wsdl\ErrorCode
     */
    public function setDialect($dialect)
    {
      $this->dialect = $dialect;
      return $this;
    }

}
