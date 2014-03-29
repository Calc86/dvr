<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 18:52
 */

namespace system;

/**
 * Class MysqlSqlCamStreamCreatorExceprion
 * @package system
 */
class MysqlSqlCamStreamCreatorException extends \BBException{};

/**
 * Class MysqlCamStreamCreator
 * @package system
 */
class MysqlCamStreamCreator implements ICamStreamCreator{
    private $cam_id;

    /**
     * @var array of [stream]ICamStream
     */
    private $streams;

    private $position = 0;

    /**
     * @param $cam_id
     * @throws MysqlSqlCamStreamCreatorException
     */
    function __construct($cam_id)
    {
        $this->cam_id = $cam_id;

        $db = \Database::getInstance();
        $q = "select c.id as cam_id, ip, user, c.pass as pass, live, rec, mtn, live_auth, live_user, live_pass, live_proto, live_port, live_path, live_width, live_height, live_audio, stream_port, stream_path  from cams as c, cam_settings as cs where c.id=cs.cam_id and c.id=$this->cam_id";
        $r = $db->query($q);

        $n = $r->num_rows;
        if(!$n){
            // Такого быть не может, бросаем эксепшн, так как стримы создаются из камер, а выборка по камерам уже была.
            throw new MysqlSqlCamStreamCreatorException($q);
        }

        if($n > 1){
            //Такая же херня
            throw new MysqlSqlCamStreamCreatorException($q);
        }

        $csTemp = $r->fetch_object("MysqlCamStream");



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

} 