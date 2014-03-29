<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 17:30
 */

namespace system;

/**
 * Class MysqlCamCreator
 * Итератор для создания камер из Mysql
 * @package system
 */
class MysqlCamCreator implements ICamCreator {
    /**
     * @var \UserID
     */
    private $dvr_id;

    /**
     * @var array of Cam
     */
    private $cams = array();

    private $count = 0;
    private $position = 0;

    /**
     * @param \UserID $dvr_id
     */
    function __construct(\UserID $dvr_id)
    {
        $this->dvr_id = $dvr_id;

        $db = \Database::getInstance();

        $q = "select id from cams where user_id = $this->dvr_id()";
        $r = $db->query($q);
        $this->count = $r->num_rows;

        while(($row = $r->fetch_object('Cam')) != null){
            /** @var Cam $row */
            $this->cams[] = $row;
        }
    }

    /**
     * @param \CamID $cid
     * @return Cam
     */
    public function create(\CamID $cid)
    {
        // TODO: Implement create() method.
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return Cam
     */
    public function current()
    {
        return $this->cams[$this->position];
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
        return $this->position;
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
        return isset($this->cams[$this->position]);
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
}