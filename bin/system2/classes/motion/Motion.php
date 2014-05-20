<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 07.04.14
 * Time: 17:41
 */

namespace system2;

/**
 * Class Motion
 * @package system2
 */
class Motion extends Daemon {

    /**
     * @var array of CamMotion
     */
    //private $camMotions = array();

    protected $dvr;

    /**
     * Набор id камер
     * @var array
     */
    protected $cams_id;

    /**
     * @param IDVR $dvr
     * @param array $cams_id
     */
    function __construct(IDVR $dvr, array $cams_id)
    {
        $this->dvr = $dvr;
        $this->cams_id = $cams_id;
        parent::__construct($this->dvr, "motion");
    }

    private function writeConfig(){
        $motionTemplatePath = Path::getLocalPath(Path::ETC)."/templates/motion.conf";
        //$threadTemplatePath = Path::getLocalPath(Path::ETC)."/templates/thread.conf";
        $config = file_get_contents($motionTemplatePath);
        //$thread = file_get_contents($threadTemplatePath);

        //TODO: Перенести это в stream камеры
        $threads = "";
        //foreach($this->camMotions as $cam){
            /** var MotionCam $cam */
            //$targetDir = realpath(TMP."/".$this->getUid()."/".$this->ge);
            //$cam->addConfig('target_dir',$targetDir);

           /* $threadPath = dirname($this->getConfigFile())."/thread_".$cam->getID().".conf";
            $threads.= "thread ".$threadPath."\n";
            $f = fopen($threadPath, "w+");
            fwrite($f, MotionConfig::parseConfig(
                $thread,
                array_merge(
                    $cam->getConfig(),
                    array(
                        MotionHttpConfigCmd::P_STREAM_PORT => MOTION_STREAM_PORT + $cam->getID()->get(),
                        MotionHttpConfigCmd::P_STREAM_LOCALHOST => MOTION_STREAM_LOCALHOST
                    )
                )
            ));
            fclose($f);
        }*/

        foreach($this->cams_id as $id){
            $threadPath = dirname($this->getConfigFile())."/thread_".$id.".conf";
            $threads.= "thread ".$threadPath."\n";
        }

        $settings = array(
            'threads' => $threads,
            //'target_dir' => Path::getTmpfsPath(Path::IMAGE.'/'.$this->dvr->getID()),
        );

        // Global options
        //TODO: избавиться от магических констант
        $settings['webcontrol_port'] = MOTION_HTTP_PORT + $this->dvr->getID();
        $settings['webcontrol_localhost'] = MOTION_HTTP_LOCALHOST;
        $settings['webcontrol_html_output'] = MOTION_HTTP_HTML;
        $settings['webcontrol_authentication'] = MOTION_HTTP_USER.":".MOTION_HTTP_PASS;

        $f = fopen($this->getConfigFile(), "w+");
        fwrite($f, MotionConfig::parseConfig($config, $settings));
        fclose($f);

        // добавить в конфиг трейды и записать конфиг файлы для трейдов
    }

    public function _start()
    {
        $this->writeConfig();
        if(MOTION_USE_LOG)
            $log = "-l {$this->getLogFile()}";
        else
            $log = '-l /dev/null';

        $shell = "motion -c {$this->getConfigFile()} -p {$this->getPidFile()} $log";
        Log::getInstance()->put($shell, __CLASS__);
        (new \BashCommand($shell))->exec();
    }

    public function _stop()
    {
        $this->kill();  //он автоматом обрабатывает kill
    }
}
