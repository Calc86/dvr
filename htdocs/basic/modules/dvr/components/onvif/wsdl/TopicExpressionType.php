<?php

namespace app\modules\dvr\components\onvif\wsdl;

class TopicExpressionType
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var anyURI $Dialect
     */
    protected $Dialect = null;

    /**
     * @param string $any
     * @param anyURI $Dialect
     */
    public function __construct($any, $Dialect)
    {
      $this->any = $any;
      $this->Dialect = $Dialect;
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
     * @return \app\modules\dvr\components\onvif\wsdl\TopicExpressionType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getDialect()
    {
      return $this->Dialect;
    }

    /**
     * @param anyURI $Dialect
     * @return \app\modules\dvr\components\onvif\wsdl\TopicExpressionType
     */
    public function setDialect($Dialect)
    {
      $this->Dialect = $Dialect;
      return $this;
    }

}
