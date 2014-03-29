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
    // From mysql
    private $live;
    private $rec;
    private $mtn;

    private $dvr_id;
    /**
     * @var ICamStreamCreator
     */
    private $csc;

    /**
     * @param \UserID $dvr_id
     */
    function __construct(\UserID $dvr_id)
    {
        $this->dvr_id = $dvr_id;
        $this->csc = new MysqlCamStreamCreator($dvr_id, new \CamID($this->id));
    }

    /**
     * @return array
     */
    private function getStreams(){
        return $this->csc->getStreams();
    }

    /**
     * @param \CamPrefix $camPrefix
     * @return ICamStream
     */
    public function getStream(\CamPrefix $camPrefix)
    {
        return $this->getStreams()[$camPrefix->get()];
    }


    public function start()
    {
        foreach(\CamPrefix::getPrefixes() as $pref){
            $stream = $this->getStreams()[$pref];
            /** @var ICamStream $stream */
            //Если поля $live, $rec, $mtn не ноль - старнуем
            if($this->$pref) $stream->start();
        }
    }

    public function stop()
    {
        foreach(\CamPrefix::getPrefixes() as $pref){
            $stream = $this->getStreams()[$pref];
            /** @var ICamStream $stream */
            $stream->stop();
        }
    }

    public function update()
    {
        foreach(\CamPrefix::getPrefixes() as $pref){
            $stream = $this->getStreams()[$pref];
            /** @var ICamStream $stream */
            if($this->$pref){
                //Так как логики еще нет, то пропускаем
                if($pref == \CamPrefix::MOTION) continue;
                //выполняем "магические функции"
                if($pref != \CamPrefix::LIVE) $stream->update();
            }else{
                //Если в БД 0 => Стопим камеру
                $stream->stop();
            }
        }
    }

    /**
     * Создать запись в сторонней программе
     * @return void
     */
    public function create()
    {
        foreach(\CamPrefix::getPrefixes() as $pref){
            $stream = $this->getStreams()[$pref];
            /** @var ICamStream $stream */
            $stream->create();
        }
    }

    /**
     * Удалить запись из сторонней программы
     * @return void
     */
    public function delete()
    {
        foreach(\CamPrefix::getPrefixes() as $pref){
            $stream = $this->getStreams()[$pref];
            /** @var ICamStream $stream */
            $stream->delete();
        }
    }

    /**
     * @return \CamID
     */
    public function getID()
    {
        return $this->id;
    }

    public function getMysqlId(){
        return $this->id;
    }


} 