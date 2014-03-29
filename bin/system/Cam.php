<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14
 * Time: 17:01
 */

namespace system;

/**
 * Class Cam
 * Просто контейнет для камеры
 * @package system
 */
class Cam implements ICam{
    private $id;
    private $dvr_id;

    /**
     * @param \UserID $dvr_id
     */
    function __construct(\UserID $dvr_id)
    {
        $this->dvr_id = $dvr_id;
    }


    public function start()
    {
        // TODO: Implement start() method.
    }

    public function stop()
    {
        // TODO: Implement stop() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    /**
     * Создать запись в сторонней программе
     * @return void
     */
    public function create()
    {
        // TODO: Implement create() method.
    }

    /**
     * Удалить запись из сторонней программы
     * @return void
     */
    public function delete()
    {
        // TODO: Implement delete() method.
    }


} 