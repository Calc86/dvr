<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 30.06.14
 * Time: 9:58
 */

namespace system2\bb;
use system2\Database;


/**
 * Class Events
 * @package system2\bb
 *
 * The followings are the available columns in table 'events':
 * @property integer $user_id
 * @property integer $cam_id
 * @property string $name
 * @property integer $time
 * @property string $comment
 */
class Events {
    protected $id;

    const MOTION_START = 'motion_start';
    const MOTION_STOP = 'motion_stop';
    const MOTION_CAMERA_LOST = 'motion_camera_lost';
    const TEST_INPUT_FAIL = 'test_input_fail';
    const WATCHDOG = 'watchdog';
    const TEST = 'test';

    /**
     * @var bool
     */
    private $isNew;

    protected $table = array(
        "user_id" => 'i',
        "cam_id" => 'i',
        "name" => 's',
        "time" => 'i',
        "comment" => 's',
    );

    protected $values = array();

    /**
     * @param $id
     * @param $name
     */
    function __construct($id = 0, $name = self::TEST)
    {
        $this->isNew = ($id == 0);

        foreach($this->table as $col=>$type){
            $this->values[$col] = null;
        }

        $this->name = $name;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->values[$name];
    }

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value){
        $this->values[$name] = $value;
    }

    /**
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        return isset($this->values[$name]);
    }

    /**
     * @return array
     */
    private function getColNames(){
        $names = array();
        foreach($this->table as $col=>$type){
            if($this->values[$col] != null){
                $names[] = $col;
            }
        }
        return $names;
    }

    private function getMarks($count){
        $marks = '';
        for($i = 0; $i < $count; $i++){
            $marks.= '?, ';
        }
        return substr($marks, 0, -2);
    }

    private function getValues(){
        $values = array();
        foreach($this->table as $col=>$type){
            if($this->values[$col] != null){
                switch($type){
                    case 'i':
                        if(!is_numeric($this->values[$col])) throw Database::createException("$col not numeric");
                        $values[] = addslashes($this->values[$col]);
                        break;
                    case 's':
                        if(!is_string($this->values[$col])) throw Database::createException("$col not string");
                        $values[] = "'".addslashes($this->values[$col])."'";
                        break;
                }
            }
        }

        return $values;
    }

    /**
     * @return \mysqli_stmt|null
     */
    private function prepare(){
        if($this->isNew){
            $names = implode(", ", $this->getColNames());
            $values = implode(", ", $this->getValues());

            $q = "insert into events ($names) values($values)\n";
            return $q;
        }
        return null;
    }

    public function save(){
        if($this->time == null) $this->time = time();
        $q = $this->prepare();
        echo $q;
        Database::getInstance()->query($q);
    }
}
