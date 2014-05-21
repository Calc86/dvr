<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 16.05.14
 * Time: 13:59
 */

namespace system2;

/**
 * стрим для программы motion(Детектор движения), по умолчанию создает тучу картинок...
 * Class MotionStream
 * @package system2
 */
class MotionStream extends Stream {

    private $config = array();

    /**
     * @param ICam $cam
     * @param ICamSettings $cs
     */
    function __construct(ICam $cam, ICamSettings $cs)
    {
        parent::__construct($cam);

        //create config file

        $motionUrl = $cs->getStopProto()."://".$cs->getIp().":".$cs->getStopPort()."/".$cs->getStopPath();
        $this->addConfig('netcam_url',$motionUrl);

        $proxyUrl = "http://localhost/out/snap.php?cid={$this->cam->getID()}";
        $this->addConfig('netcam_proxy',$proxyUrl);

        /*if($s['stop_user'] != ''){
            $userPass = $s['stop_user'].":".$s['stop_pass'];
            $this->addConfig('netcam_userpass', $userPass);
        }*/

        $targetDir = Path::getTmpfsPath(Path::IMAGE.'/'.$this->cam->getDVR()->getID().'/'.$this->cam->getID());
        $this->addConfig('target_dir', $targetDir);

        $path = dirname((new Motion($this->cam->getDVR(), array()))->getConfigFile());
        $threadPath = $path."/thread_".$cam->getID().".conf";

        $threadTemplatePath = Path::getLocalPath(Path::ETC)."/templates/thread.conf";
        $thread = file_get_contents($threadTemplatePath);
        $f = fopen($threadPath, "w+");
        fwrite($f, MotionConfig::parseConfig(
            $thread,
            array_merge(
                $this->config,
                array(
                    MotionHttpConfigCmd::P_STREAM_PORT => MOTION_STREAM_PORT + $cam->getID(),
                    MotionHttpConfigCmd::P_STREAM_LOCALHOST => MOTION_STREAM_LOCALHOST
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
        foreach($config as $k=>$v){
            $this->addConfig($k,$v);
        }
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Добавить или изменить строчку конфига
     * @param String $name
     * @param String $value
     */
    public function addConfig($name, $value){
        $this->config[$name] = $value;
    }

    public function update()
    {
        parent::update();

        $path = Path::getTmpfsPath(Path::IMAGE.'/'.$this->cam->getDVR()->getID().'/'.$this->cam->getID());

        $list = "$path/list.txt";

        $filename = $this->cam->getID()."_".date("Ymd_His").".mp4";

        $createList = new \BashCommand("ls $path/snapshot*.jpg | sort > $list");
        $deleteList = new \BashCommand("rm $list");

        $createTimelaps = new \BashCommand("cat $list | xargs cat | ffmpeg -f image2pipe -r 3 -vcodec mjpeg -i - -vcodec libx264 $path/../$filename");
        $deleteImages = new \BashCommand("cat $list | xargs rm");

        $this->log($createList);
        $this->log($createTimelaps);
        $this->log($deleteImages);

        $createList->exec();
        //$createTimelaps->exec();

        $deleteImages->exec();
        $deleteList->exec();
    }


}