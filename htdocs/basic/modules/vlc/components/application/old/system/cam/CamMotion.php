<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 07.04.14
 * Time: 17:40
 */

namespace system;

use app\modules\vlc\types\CamID;
use app\modules\vlc\types\UserID;

/**
 * Class CamMotion
 * @package system
 * Класс для хранения настроек мошна для камеры
 * @deprecated
 */
class CamMotion {

    /**
     * @var UserID
     */
    private $dvrID;

    /**
     * @var CamID
     */
    private $camID;

    /**
     * @var array key=>value
     */
    private array $config;

    private string $targetDir;

    /**
     * @param UserID $dvrID
     * @param CamID $camID
     */
    function __construct(UserID $dvrID, CamID $camID)
    {
        $this->dvrID = $dvrID;
        $this->camID = $camID;

        if(!is_dir(IMG."/".$this->getDvrID())){
            mkdir(IMG."/".$this->getDvrID());
        }

        $this->targetDir = IMG."/".$this->getDvrID()."/".$this->getCamID();

        if(!is_dir($this->targetDir)){
            mkdir($this->targetDir);
        }
        $this->setDefaultValues();
    }

    protected function setDefaultValues(){
        $this->addConfig('target_dir', $this->getTargetDir());
        //$this->addConfig('snapshot_filename', '%Y-%m-%d/%v-%H_%M_%S-snapshot');
        //$this->addConfig('snapshot_filename', '%Y-%m-%d/%H_%M_%S-snapshot');
    }

    /**
     * @return string
     */
    public function getTargetDir()
    {
        return $this->targetDir;
    }

    /**
     * @return CamID
     */
    public function getCamID(): CamID
    {
        return $this->camID;
    }

    /**
     * @return UserID
     */
    public function getDvrID(): UserID
    {
        return $this->dvrID;
    }

    /**
     * @param array $config
     */
    public function setConfig(array $config)
    {
        foreach($config as $k=>$v){
            $this->addConfig($k,$v);
        }
    }

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return $this->config;
    }

    /**
     * Добавить или изменить строчку конфига
     * @param string $name
     * @param string $value
     */
    public function addConfig(string $name, string $value){
        $this->config[$name] = $value;
    }
} 