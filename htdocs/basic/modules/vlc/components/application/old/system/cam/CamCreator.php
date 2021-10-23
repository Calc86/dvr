<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 09.04.14
 * Time: 14:27
 */

namespace system;


use app\modules\vlc\types\UserID;

/**
 * Class CamCreator
 * @package system
 * @deprecated
 */
class CamCreator implements  ICamCreator{
    /**
     * @var UserID
     */
    protected UserID $dvr_id;

    /**
     * @var array of Cam
     */
    protected array $cams = [];

    private int $position = 0;
    protected array $keys = [];

    /**
     * fill cams [k]=>v
     * @param UserID $dvr_id
     */
    public function __construct(UserID $dvr_id)
    {
        $this->dvr_id = $dvr_id;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return Cam
     */
    public function current(): Cam
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
     * @return boolean The return value will be cast to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid(): bool
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
     * Whether offset exists
     * @link http://php.net/manual/en/arrayaccess.offsetexists.php
     * @param mixed $offset <p>
     * An offset to check for.
     * </p>
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be cast to boolean if non-boolean was returned.
     */
    public function offsetExists($offset): bool
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
    public function offsetGet($offset): ?Cam
    {
        return $this->cams[$offset] ?? null;
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