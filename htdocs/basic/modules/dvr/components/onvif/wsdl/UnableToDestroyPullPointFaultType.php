<?php

namespace app\modules\dvr\components\onvif\wsdl;

class UnableToDestroyPullPointFaultType extends BaseFaultType
{

    /**
     * @param string $any
     * @param \DateTime $Timestamp
     */
    public function __construct($any, \DateTime $Timestamp)
    {
      parent::__construct($any, $Timestamp);
    }

}
