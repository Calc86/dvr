<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ColorCluster
{

    /**
     * @var Color $Color
     */
    protected $Color = null;

    /**
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @var ColorCovariance $Covariance
     */
    protected $Covariance = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param Color $Color
     * @param float $Weight
     * @param ColorCovariance $Covariance
     * @param string $any
     */
    public function __construct($Color, $Weight, $Covariance, $any)
    {
      $this->Color = $Color;
      $this->Weight = $Weight;
      $this->Covariance = $Covariance;
      $this->any = $any;
    }

    /**
     * @return Color
     */
    public function getColor()
    {
      return $this->Color;
    }

    /**
     * @param Color $Color
     * @return \app\modules\dvr\components\onvif\wsdl\ColorCluster
     */
    public function setColor($Color)
    {
      $this->Color = $Color;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param float $Weight
     * @return \app\modules\dvr\components\onvif\wsdl\ColorCluster
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return ColorCovariance
     */
    public function getCovariance()
    {
      return $this->Covariance;
    }

    /**
     * @param ColorCovariance $Covariance
     * @return \app\modules\dvr\components\onvif\wsdl\ColorCluster
     */
    public function setCovariance($Covariance)
    {
      $this->Covariance = $Covariance;
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
     * @return \app\modules\dvr\components\onvif\wsdl\ColorCluster
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
