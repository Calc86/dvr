<?php

namespace app\modules\dvr\components\onvif\wsdl;

class TopicType extends ExtensibleDocumented
{

    /**
     * @var QueryExpressionType $MessagePattern
     */
    protected $MessagePattern = null;

    /**
     * @var TopicType[] $Topic
     */
    protected $Topic = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var NCName $name
     */
    protected $name = null;

    /**
     * @var anonymous65 $messageTypes
     */
    protected $messageTypes = null;

    /**
     * @var boolean $final
     */
    protected $final = null;

    /**
     * @param string $any
     * @param NCName $name
     * @param anonymous65 $messageTypes
     * @param boolean $final
     */
    public function __construct($any, $name, $messageTypes, $final)
    {
      parent::__construct();
      $this->any = $any;
      $this->name = $name;
      $this->messageTypes = $messageTypes;
      $this->final = $final;
    }

    /**
     * @return QueryExpressionType
     */
    public function getMessagePattern()
    {
      return $this->MessagePattern;
    }

    /**
     * @param QueryExpressionType $MessagePattern
     * @return \app\modules\dvr\components\onvif\wsdl\TopicType
     */
    public function setMessagePattern($MessagePattern)
    {
      $this->MessagePattern = $MessagePattern;
      return $this;
    }

    /**
     * @return TopicType[]
     */
    public function getTopic()
    {
      return $this->Topic;
    }

    /**
     * @param TopicType[] $Topic
     * @return \app\modules\dvr\components\onvif\wsdl\TopicType
     */
    public function setTopic(array $Topic = null)
    {
      $this->Topic = $Topic;
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
     * @return \app\modules\dvr\components\onvif\wsdl\TopicType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return NCName
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param NCName $name
     * @return \app\modules\dvr\components\onvif\wsdl\TopicType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return anonymous65
     */
    public function getMessageTypes()
    {
      return $this->messageTypes;
    }

    /**
     * @param anonymous65 $messageTypes
     * @return \app\modules\dvr\components\onvif\wsdl\TopicType
     */
    public function setMessageTypes($messageTypes)
    {
      $this->messageTypes = $messageTypes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFinal()
    {
      return $this->final;
    }

    /**
     * @param boolean $final
     * @return \app\modules\dvr\components\onvif\wsdl\TopicType
     */
    public function setFinal($final)
    {
      $this->final = $final;
      return $this;
    }

}
