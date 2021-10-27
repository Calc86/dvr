<?php

namespace app\modules\dvr\components\onvif\wsdl;

class TopicNamespaceType extends ExtensibleDocumented
{

    /**
     * @var Topic[] $Topic
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
     * @var anyURI $targetNamespace
     */
    protected $targetNamespace = null;

    /**
     * @var boolean $final
     */
    protected $final = null;

    /**
     * @param string $any
     * @param NCName $name
     * @param anyURI $targetNamespace
     * @param boolean $final
     */
    public function __construct($any, $name, $targetNamespace, $final)
    {
      parent::__construct();
      $this->any = $any;
      $this->name = $name;
      $this->targetNamespace = $targetNamespace;
      $this->final = $final;
    }

    /**
     * @return Topic[]
     */
    public function getTopic()
    {
      return $this->Topic;
    }

    /**
     * @param Topic[] $Topic
     * @return \app\modules\dvr\components\onvif\wsdl\TopicNamespaceType
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
     * @return \app\modules\dvr\components\onvif\wsdl\TopicNamespaceType
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
     * @return \app\modules\dvr\components\onvif\wsdl\TopicNamespaceType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getTargetNamespace()
    {
      return $this->targetNamespace;
    }

    /**
     * @param anyURI $targetNamespace
     * @return \app\modules\dvr\components\onvif\wsdl\TopicNamespaceType
     */
    public function setTargetNamespace($targetNamespace)
    {
      $this->targetNamespace = $targetNamespace;
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
     * @return \app\modules\dvr\components\onvif\wsdl\TopicNamespaceType
     */
    public function setFinal($final)
    {
      $this->final = $final;
      return $this;
    }

}
