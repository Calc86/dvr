<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Fault
{

    /**
     * @var faultcode $Code
     */
    protected $Code = null;

    /**
     * @var faultreason $Reason
     */
    protected $Reason = null;

    /**
     * @var anyURI $Node
     */
    protected $Node = null;

    /**
     * @var anyURI $Role
     */
    protected $Role = null;

    /**
     * @var detail $Detail
     */
    protected $Detail = null;

    /**
     * @param faultcode $Code
     * @param faultreason $Reason
     */
    public function __construct($Code, $Reason)
    {
      $this->Code = $Code;
      $this->Reason = $Reason;
    }

    /**
     * @return faultcode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param faultcode $Code
     * @return \app\modules\dvr\components\onvif\wsdl\Fault
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return faultreason
     */
    public function getReason()
    {
      return $this->Reason;
    }

    /**
     * @param faultreason $Reason
     * @return \app\modules\dvr\components\onvif\wsdl\Fault
     */
    public function setReason($Reason)
    {
      $this->Reason = $Reason;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getNode()
    {
      return $this->Node;
    }

    /**
     * @param anyURI $Node
     * @return \app\modules\dvr\components\onvif\wsdl\Fault
     */
    public function setNode($Node)
    {
      $this->Node = $Node;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getRole()
    {
      return $this->Role;
    }

    /**
     * @param anyURI $Role
     * @return \app\modules\dvr\components\onvif\wsdl\Fault
     */
    public function setRole($Role)
    {
      $this->Role = $Role;
      return $this;
    }

    /**
     * @return detail
     */
    public function getDetail()
    {
      return $this->Detail;
    }

    /**
     * @param detail $Detail
     * @return \app\modules\dvr\components\onvif\wsdl\Fault
     */
    public function setDetail($Detail)
    {
      $this->Detail = $Detail;
      return $this;
    }

}
