<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Topic
{

    /**
     * @var ConcreteTopicExpression $parent
     */
    protected $parent = null;

    /**
     * @param ConcreteTopicExpression $parent
     */
    public function __construct($parent)
    {
      $this->parent = $parent;
    }

    /**
     * @return ConcreteTopicExpression
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param ConcreteTopicExpression $parent
     * @return \app\modules\dvr\components\onvif\wsdl\Topic
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

}
