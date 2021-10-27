<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ProblemActionType
{

    /**
     * @var AttributedURIType $Action
     */
    protected $Action = null;

    /**
     * @var anyURI $SoapAction
     */
    protected $SoapAction = null;

    /**
     * @param AttributedURIType $Action
     */
    public function __construct($Action)
    {
      $this->Action = $Action;
    }

    /**
     * @return AttributedURIType
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param AttributedURIType $Action
     * @return \app\modules\dvr\components\onvif\wsdl\ProblemActionType
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getSoapAction()
    {
      return $this->SoapAction;
    }

    /**
     * @param anyURI $SoapAction
     * @return \app\modules\dvr\components\onvif\wsdl\ProblemActionType
     */
    public function setSoapAction($SoapAction)
    {
      $this->SoapAction = $SoapAction;
      return $this;
    }

}
