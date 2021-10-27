<?php

namespace app\modules\dvr\components\onvif\wsdl;

class InvalidFilterFaultType extends BaseFaultType
{

    /**
     * @var QName[] $UnknownFilter
     */
    protected $UnknownFilter = null;

    /**
     * @param string $any
     * @param \DateTime $Timestamp
     * @param QName[] $UnknownFilter
     */
    public function __construct($any, \DateTime $Timestamp, array $UnknownFilter)
    {
      parent::__construct($any, $Timestamp);
      $this->UnknownFilter = $UnknownFilter;
    }

    /**
     * @return QName[]
     */
    public function getUnknownFilter()
    {
      return $this->UnknownFilter;
    }

    /**
     * @param QName[] $UnknownFilter
     * @return \app\modules\dvr\components\onvif\wsdl\InvalidFilterFaultType
     */
    public function setUnknownFilter(array $UnknownFilter)
    {
      $this->UnknownFilter = $UnknownFilter;
      return $this;
    }

}
