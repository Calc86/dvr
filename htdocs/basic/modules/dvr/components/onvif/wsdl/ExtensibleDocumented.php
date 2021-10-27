<?php

namespace app\modules\dvr\components\onvif\wsdl;

abstract class ExtensibleDocumented
{

    /**
     * @var Documentation $documentation
     */
    protected $documentation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Documentation
     */
    public function getDocumentation()
    {
      return $this->documentation;
    }

    /**
     * @param Documentation $documentation
     * @return \app\modules\dvr\components\onvif\wsdl\ExtensibleDocumented
     */
    public function setDocumentation($documentation)
    {
      $this->documentation = $documentation;
      return $this;
    }

}
