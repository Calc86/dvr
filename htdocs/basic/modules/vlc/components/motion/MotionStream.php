<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 16.05.14
 * Time: 13:59
 */

namespace app\modules\vlc\components\motion;

use app\modules\vlc\components\common\Path;
use app\modules\vlc\components\common\Stream;
use app\modules\vlc\components\interfaces\ICam;
use app\modules\vlc\components\interfaces\ICamSettings;
use app\modules\vlc\components\TimeLock;

/**
 * Stream для программы motion(Детектор движения), по умолчанию создает тучу картинок...
 * Class MotionStream
 * @package system2
 */
class MotionStream extends Stream
{

    private array $config = [];
    private $lock;

    /**
     * @param ICam $cam
     * @param ICamSettings $cs
     */
    function __construct(ICam $cam, ICamSettings $cs)
    {
        parent::__construct($cam);

        $this->lock = new TimeLock($this->cam->getID() . '_timelaps', TIME_LOCK_TIMELAPSE);

        //create config file
        $motionUrl = $cs->getStopProto() . "://" . $cs->getIp() . ":" . $cs->getStopPort() . "/" . $cs->getStopPath();
        $this->addConfig('netcam_url', $motionUrl);

        $proxyUrl = "http://localhost/out/snap.php?cid={$this->cam->getID()}";
        $this->addConfig('netcam_proxy', $proxyUrl);

        /*if($s['stop_user'] != ''){
            $userPass = $s['stop_user'].":".$s['stop_pass'];
            $this->addConfig('netcam_userpass', $userPass);
        }*/

        $targetDir = Path::getTmpfsPath(Path::IMAGE . '/' . $this->cam->getDVR()->getUser()->getID() . '/' . $this->cam->getID());
        $this->addConfig('target_dir', $targetDir);

        $path = dirname((new Motion($this->cam->getDVR(), array()))->getConfigFile());
        $threadPath = $path . "/thread_" . $cam->getID() . ".conf";

        $threadTemplatePath = Path::getPath(Path::getRoot(), Path::ETC) . "/templates/thread.conf";
        $thread = file_get_contents($threadTemplatePath);
        $f = fopen($threadPath, "w+");
        fwrite($f, MotionConfig::parseConfig(
            $thread,
            array_merge(
                $this->config,
                array(
                    MotionHttpConfigCmd::P_STREAM_PORT => MOTION_STREAM_PORT + $cam->getID(),
                    MotionHttpConfigCmd::P_STREAM_LOCALHOST => MOTION_STREAM_LOCALHOST,
                    'cam_id' => $cam->getID(),
                    'user_id' => $cam->getDVR()->getUser()->getID(),
                )
            )
        ));
        fclose($f);
    }

    /**
     * Не заменяет конфиг, а дописывает конфиг
     * key => value
     * @param array $config
     */
    public function setConfig(array $config)
    {
        foreach ($config as $k => $v) {
            $this->addConfig($k, $v);
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
     * @param String $name
     * @param String $value
     */
    public function addConfig(String $name, String $value)
    {
        $this->config[$name] = $value;
    }

    /**
     * @return string
     */
    private function getImagesPath(): string
    {
        return '/' . $this->cam->getDVR()->getUser()->getID() . '/' . $this->cam->getID();
    }

    /*public function update()
    {
        //if(!System::getInstance()->getFlag(System::FLAG_STOP))
        //    if(!$this->lock->create()) return;    //время не пришло

        parent::update();

        //$timelapse = new CreateTimelapsCommand($this->cam->getID(), Path::getTmpfsPath(Path::IMAGE.$this->getImagesPath()));
        //System::getInstance()->addCommand($timelapse);

        //$endPath = '/'.$this->cam->getDVR()->getUser()->getID().'/'.$this->cam->getID();

        // move to nfs/rec/user/timelapse/file
        //$to = Path::RECORD.$this->getImagesPath().'/../timelapse/'.$timelapse->getFileName();
        //$move = AbstractFactory::getInstance()->createMoveToNfsCommand($timelapse->getFilePath(), $to);
        //System::getInstance()->addCommand($move);
    }*/

    public function _start()
    {
        //создаем timelock
        //$this->lock->create();
    }


}
