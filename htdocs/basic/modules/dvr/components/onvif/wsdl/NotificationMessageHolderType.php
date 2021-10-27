<?php

namespace app\modules\dvr\components\onvif\wsdl;

class NotificationMessageHolderType
{

    /**
     * @var EndpointReferenceType $SubscriptionReference
     */
    protected $SubscriptionReference = null;

    /**
     * @var TopicExpressionType $Topic
     */
    protected $Topic = null;

    /**
     * @var EndpointReferenceType $ProducerReference
     */
    protected $ProducerReference = null;

    /**
     * @var Message $Message
     */
    protected $Message = null;

    /**
     * @param EndpointReferenceType $SubscriptionReference
     * @param TopicExpressionType $Topic
     * @param EndpointReferenceType $ProducerReference
     * @param Message $Message
     */
    public function __construct($SubscriptionReference, $Topic, $ProducerReference, $Message)
    {
      $this->SubscriptionReference = $SubscriptionReference;
      $this->Topic = $Topic;
      $this->ProducerReference = $ProducerReference;
      $this->Message = $Message;
    }

    /**
     * @return EndpointReferenceType
     */
    public function getSubscriptionReference()
    {
      return $this->SubscriptionReference;
    }

    /**
     * @param EndpointReferenceType $SubscriptionReference
     * @return \app\modules\dvr\components\onvif\wsdl\NotificationMessageHolderType
     */
    public function setSubscriptionReference($SubscriptionReference)
    {
      $this->SubscriptionReference = $SubscriptionReference;
      return $this;
    }

    /**
     * @return TopicExpressionType
     */
    public function getTopic()
    {
      return $this->Topic;
    }

    /**
     * @param TopicExpressionType $Topic
     * @return \app\modules\dvr\components\onvif\wsdl\NotificationMessageHolderType
     */
    public function setTopic($Topic)
    {
      $this->Topic = $Topic;
      return $this;
    }

    /**
     * @return EndpointReferenceType
     */
    public function getProducerReference()
    {
      return $this->ProducerReference;
    }

    /**
     * @param EndpointReferenceType $ProducerReference
     * @return \app\modules\dvr\components\onvif\wsdl\NotificationMessageHolderType
     */
    public function setProducerReference($ProducerReference)
    {
      $this->ProducerReference = $ProducerReference;
      return $this;
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param Message $Message
     * @return \app\modules\dvr\components\onvif\wsdl\NotificationMessageHolderType
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

}
