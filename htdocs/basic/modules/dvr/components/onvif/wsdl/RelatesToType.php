<?php

namespace app\modules\dvr\components\onvif\wsdl;

class RelatesToType
{

    /**
     * @var anyURI $_
     */
    protected $_ = null;

    /**
     * @var RelationshipTypeOpenEnum $RelationshipType
     */
    protected $RelationshipType = null;

    /**
     * @param anyURI $_
     * @param RelationshipTypeOpenEnum $RelationshipType
     */
    public function __construct($_, $RelationshipType)
    {
      $this->_ = $_;
      $this->RelationshipType = $RelationshipType;
    }

    /**
     * @return anyURI
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param anyURI $_
     * @return \app\modules\dvr\components\onvif\wsdl\RelatesToType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return RelationshipTypeOpenEnum
     */
    public function getRelationshipType()
    {
      return $this->RelationshipType;
    }

    /**
     * @param RelationshipTypeOpenEnum $RelationshipType
     * @return \app\modules\dvr\components\onvif\wsdl\RelatesToType
     */
    public function setRelationshipType($RelationshipType)
    {
      $this->RelationshipType = $RelationshipType;
      return $this;
    }

}
