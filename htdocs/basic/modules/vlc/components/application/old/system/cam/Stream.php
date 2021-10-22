<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 12.05.14
 * Time: 13:40
 */

namespace system\cam;

use system\ICamStream;

/**
 * Class Stream
 * @package system\cam
 * Класс потока
 */
class Stream implements ICamStream{

    protected $cc;

    function __construct()
    {
        $cc = new \CamControl();
        // TODO: Implement __construct() method.
    }


    public function start()
    {
        // TODO: Implement start() method.
    }

    public function stop()
    {
        // TODO: Implement stop() method.
    }

    public function isPlaying()
    {
        // TODO: Implement isPlaying() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function getName()
    {
        // TODO: Implement getName() method.
    }
}