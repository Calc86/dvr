<?php

namespace app\modules\dvr\components\onvif\wsdl;

class Rectangle
{

    /**
     * @var float $bottom
     */
    protected $bottom = null;

    /**
     * @var float $top
     */
    protected $top = null;

    /**
     * @var float $right
     */
    protected $right = null;

    /**
     * @var float $left
     */
    protected $left = null;

    /**
     * @param float $bottom
     * @param float $top
     * @param float $right
     * @param float $left
     */
    public function __construct($bottom, $top, $right, $left)
    {
      $this->bottom = $bottom;
      $this->top = $top;
      $this->right = $right;
      $this->left = $left;
    }

    /**
     * @return float
     */
    public function getBottom()
    {
      return $this->bottom;
    }

    /**
     * @param float $bottom
     * @return \app\modules\dvr\components\onvif\wsdl\Rectangle
     */
    public function setBottom($bottom)
    {
      $this->bottom = $bottom;
      return $this;
    }

    /**
     * @return float
     */
    public function getTop()
    {
      return $this->top;
    }

    /**
     * @param float $top
     * @return \app\modules\dvr\components\onvif\wsdl\Rectangle
     */
    public function setTop($top)
    {
      $this->top = $top;
      return $this;
    }

    /**
     * @return float
     */
    public function getRight()
    {
      return $this->right;
    }

    /**
     * @param float $right
     * @return \app\modules\dvr\components\onvif\wsdl\Rectangle
     */
    public function setRight($right)
    {
      $this->right = $right;
      return $this;
    }

    /**
     * @return float
     */
    public function getLeft()
    {
      return $this->left;
    }

    /**
     * @param float $left
     * @return \app\modules\dvr\components\onvif\wsdl\Rectangle
     */
    public function setLeft($left)
    {
      $this->left = $left;
      return $this;
    }

}
