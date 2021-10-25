<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 30.06.14
 * Time: 9:58
 */

namespace system2\bb;

use app\modules\dvr\components\exceptions\MysqlQueryException;
use app\modules\dvr\components\mysql\Database;


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
class Events
{
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
    private bool $isNew;

    protected array $table = [
        "user_id" => 'i',
        "cam_id" => 'i',
        "name" => 's',
        "time" => 'i',
        "comment" => 's',
    ];

    protected $values = array();

    /**
     * @param int $id
     * @param string $name
     */
    function __construct(int $id = 0, string $name = self::TEST)
    {
        $this->isNew = ($id == 0);

        foreach ($this->table as $col => $type) {
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
    public function __set($name, $value)
    {
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
    private function getColNames()
    {
        $names = array();
        foreach ($this->table as $col => $type) {
            if ($this->values[$col] != null) {
                $names[] = $col;
            }
        }
        return $names;
    }

    /**
     * @param $count
     * @return false|string
     */
    private function getMarks($count)
    {
        $marks = '';
        for ($i = 0; $i < $count; $i++) {
            $marks .= '?, ';
        }
        return substr($marks, 0, -2);
    }

    /**
     * @return array
     * @throws MysqlQueryException
     */
    private function getValues(): array
    {
        $values = array();
        foreach ($this->table as $col => $type) {
            if ($this->values[$col] != null) {
                switch ($type) {
                    case 'i':
                        if (!is_numeric($this->values[$col])) throw Database::createException("$col not numeric");
                        $values[] = addslashes($this->values[$col]);
                        break;
                    case 's':
                        if (!is_string($this->values[$col])) throw Database::createException("$col not string");
                        $values[] = "'" . addslashes($this->values[$col]) . "'";
                        break;
                }
            }
        }

        return $values;
    }

    /**
     * @return string|null
     * @throws MysqlQueryException
     */
    private function prepare(): ?string
    {
        if ($this->isNew) {
            $names = implode(", ", $this->getColNames());
            $values = implode(", ", $this->getValues());

            return "insert into events ($names) values($values)\n";
        }
        return null;
    }

    public function save()
    {
        if ($this->time == null) $this->time = time();
        $q = $this->prepare();
        echo $q;
        Database::getInstance()->query($q);
    }
}