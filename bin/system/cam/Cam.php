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
abstract class Cam implements ICam{
    protected $id;
    protected $ip;
    // From mysql
    protected $live;

    protected /** @noinspection PhpUnusedPrivateFieldInspection */
        $rec;
    protected /** @noinspection PhpUnusedPrivateFieldInspection */
        $mtn;

    protected $lhttp = 1;

    /**
     * @var CamMotion
     */
    private $camMotion;

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
    }

    /**
     * @return \system\CamMotion
     */
    public function getCamMotion()
    {
        return $this->camMotion;
    }

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param CamMotion
     * @return CamMotion
     */
    public function setCamMotion(CamMotion $camMotion){
        if($this->mtn){
            $this->camMotion = $camMotion;
        }
        else
        {
            $this->camMotion = null;
        }
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
            // live && live = live
            if($this->canPlay(new \CamPrefix($pref))) $stream->start();
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

    /**
     * @param \CamPrefix $prefix
     * @return bool
     */
    private function canPlay(\CamPrefix $prefix){
        //нужно вытянуть одну из переменных $this->live, $this->mtn, $this->rec
        return ($this->$prefix && $this->live && $prefix != 'mtn');
    }

    public function live(){
        $stream = $this->getStreams()[\CamPrefix::LIVE];
        /** @var ICamStream $stream */

        if($this->canPlay(new \CamPrefix(\CamPrefix::LIVE))){
            $stream->start();
        }else{
            //Если в БД 0 => Стопим камеру
            $stream->stop();
        }
    }

    public function update()
    {
        foreach(\CamPrefix::getPrefixes() as $pref){
            $stream = $this->getStreams()[$pref];
            // всё зависит от live)
            /** @var ICamStream $stream */
            if($this->canPlay(new \CamPrefix($pref))){
                if($pref == \CamPrefix::MOTION) continue; //Так как логики еще нет, то пропускаем
                //выполняем "магические функции"
                if($pref != \CamPrefix::LIVE && $pref != \CamPrefix::LHTTP) $stream->update();
                if($pref == \CamPrefix::LIVE){
                    if($this->rec){
                        try{
                            $connection = fsockopen('localhost', $stream->getStreamPort(),$err_no, $err_str, 1);
                            fclose($connection);
                        }catch (\Exception $e){
                            $stream->update();
                        }
                    }
                    $stream->start();
                }
                if($pref == \CamPrefix::LHTTP) $stream->start();
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

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * @param mixed $live
     */
    public function setLive($live)
    {
        $this->live = $live;
    }

    /**
     * @param mixed $mtn
     */
    public function setMtn($mtn)
    {
        $this->mtn = $mtn;
    }

    /**
     * @param mixed $rec
     */
    public function setRec($rec)
    {
        $this->rec = $rec;
    }

    /**
     * @param \system\ICamStreamCreator $csc
     */
    public function setCamStreamCreator($csc)
    {
        $this->csc = $csc;
    }
} 