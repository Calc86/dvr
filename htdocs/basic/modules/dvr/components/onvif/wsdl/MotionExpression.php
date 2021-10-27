<?php

namespace app\modules\dvr\components\onvif\wsdl;

class MotionExpression
{

    /**
     * @var string $Expression
     */
    protected $Expression = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @param string $Expression
     * @param string $any
     * @param string $Type
     */
    public function __construct($Expression, $any, $Type)
    {
      $this->Expression = $Expression;
      $this->any = $any;
      $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function getExpression()
    {
      return $this->Expression;
    }

    /**
     * @param string $Expression
     * @return \app\modules\dvr\components\onvif\wsdl\MotionExpression
     */
    public function setExpression($Expression)
    {
      $this->Expression = $Expression;
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
     * @return \app\modules\dvr\components\onvif\wsdl\MotionExpression
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \app\modules\dvr\components\onvif\wsdl\MotionExpression
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
