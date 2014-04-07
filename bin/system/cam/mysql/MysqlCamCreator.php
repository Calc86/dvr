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
    private $keys = array();

    /**
     * @param \UserID $dvr_id
     */
    function __construct(\UserID $dvr_id)
    {
        $this->dvr_id = $dvr_id;

        $db = \Database::getInstance();

        $q = "select id, ip, live, rec, mtn from cams where user_id = $this->dvr_id";
        $r = $db->query($q);
        $this->count = $r->num_rows;

        while(($row = $r->fetch_object('system\Cam',array($this->dvr_id))) != null){
            /** @var Cam $row */
            //залить параметры
            $camMotion = new MysqlCamMotion(new \CamID($row->getID()), $row->getIp());
            $row->setCamMotion($camMotion);

            $this->cams[$row->getMysqlId()] = $row;
            $this->keys[] = $row->getMysqlId();
        }
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return Cam
     */
    public function current()
    {
        return $this->cams[$this->keys[$this->position]];
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
        return $this->keys[$this->position];
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
        return isset($this->keys[$this->position]);
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

    ////ARRAY
    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Whether a offset exists
     * @link http://php.net/manual/en/arrayaccess.offsetexists.php
     * @param mixed $offset <p>
     * An offset to check for.
     * </p>
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     */
    public function offsetExists($offset)
    {
        return isset($this->cams[$offset]);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return Cam Can return all value types.
     */
    public function offsetGet($offset)
    {
        return isset($this->cams[$offset]) ? $this->cams[$offset] : null;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to set
     * @link http://php.net/manual/en/arrayaccess.offsetset.php
     * @param mixed $offset <p>
     * The offset to assign the value to.
     * </p>
     * @param mixed $value <p>
     * The value to set.
     * </p>
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->cams[] = $value;
        } else {
            $this->cams[$offset] = $value;
        }
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to unset
     * @link http://php.net/manual/en/arrayaccess.offsetunset.php
     * @param mixed $offset <p>
     * The offset to unset.
     * </p>
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->cams[$offset]);
    }


}