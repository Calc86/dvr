<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 09.04.14
 * Time: 14:38
 */

namespace system;

/**
 * Class CamStreamCreator
 * @package system
 */
abstract class CamStreamCreator implements ICamStreamCreator {
    protected  $dvr_id;
    protected  $cam_id;

    /**
     * @var array of [stream]ICamStream
     */
    protected $streams;

    private $position = 0;

    /**
     * @param \UserID $dvr_id
     * @param \CamID $cam_id
     * @throws
     */
    function __construct(\UserID $dvr_id, \CamID $cam_id)
    {
        $this->dvr_id = $dvr_id;
        $this->cam_id = $cam_id;
    }


    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return ICamStream.
     */
    public function current()
    {
        return $this->streams[\CamPrefix::getPrefixes()[$this->position]];
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     */
    public function next()
    {
        ++$this->position;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     */
    public function key()
    {
        $this->position;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid()
    {
        return isset($this->streams[\CamPrefix::getPrefixes()[$this->position]]);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     */
    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * @return array of ICamStream
     */
    public function getStreams()
    {
        return $this->streams;
    }
} 