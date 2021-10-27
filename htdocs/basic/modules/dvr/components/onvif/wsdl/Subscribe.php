<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Subscribe
{

    /**
     * @var EndpointReferenceType $ConsumerReference
     */
    protected $ConsumerReference = null;

    /**
     * @var FilterType $Filter
     */
    protected $Filter = null;

    /**
     * @var AbsoluteOrRelativeTimeType $InitialTerminationTime
     */
    protected $InitialTerminationTime = null;

    /**
     * @var SubscriptionPolicy $SubscriptionPolicy
     */
    protected $SubscriptionPolicy = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param EndpointReferenceType $ConsumerReference
     * @param FilterType $Filter
     * @param AbsoluteOrRelativeTimeType $InitialTerminationTime
     * @param SubscriptionPolicy $SubscriptionPolicy
     * @param string $any
     */
    public function __construct($ConsumerReference, $Filter, $InitialTerminationTime, $SubscriptionPolicy, $any)
    {
      $this->ConsumerReference = $ConsumerReference;
      $this->Filter = $Filter;
      $this->InitialTerminationTime = $InitialTerminationTime;
      $this->SubscriptionPolicy = $SubscriptionPolicy;
      $this->any = $any;
    }

    /**
     * @return EndpointReferenceType
     */
    public function getConsumerReference()
    {
      return $this->ConsumerReference;
    }

    /**
     * @param EndpointReferenceType $ConsumerReference
     * @return \app\modules\dvr\components\onvif\wsdl\Subscribe
     */
    public function setConsumerReference($ConsumerReference)
    {
      $this->ConsumerReference = $ConsumerReference;
      return $this;
    }

    /**
     * @return FilterType
     */
    public function getFilter()
    {
      return $this->Filter;
    }

    /**
     * @param FilterType $Filter
     * @return \app\modules\dvr\components\onvif\wsdl\Subscribe
     */
    public function setFilter($Filter)
    {
      $this->Filter = $Filter;
      return $this;
    }

    /**
     * @return AbsoluteOrRelativeTimeType
     */
    public function getInitialTerminationTime()
    {
      return $this->InitialTerminationTime;
    }

    /**
     * @param AbsoluteOrRelativeTimeType $InitialTerminationTime
     * @return \app\modules\dvr\components\onvif\wsdl\Subscribe
     */
    public function setInitialTerminationTime($InitialTerminationTime)
    {
      $this->InitialTerminationTime = $InitialTerminationTime;
      return $this;
    }

    /**
     * @return SubscriptionPolicy
     */
    public function getSubscriptionPolicy()
    {
      return $this->SubscriptionPolicy;
    }

    /**
     * @param SubscriptionPolicy $SubscriptionPolicy
     * @return \app\modules\dvr\components\onvif\wsdl\Subscribe
     */
    public function setSubscriptionPolicy($SubscriptionPolicy)
    {
      $this->SubscriptionPolicy = $SubscriptionPolicy;
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
     * @return \app\modules\dvr\components\onvif\wsdl\Subscribe
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
