<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 07.04.14
 * Time: 17:41
 */

namespace app\modules\vlc\components\motion;

use app\modules\vlc\components\common\Daemon;
use app\modules\vlc\components\common\Path;
use app\modules\vlc\components\IDVR;

/**
 * Class Motion
 * @package system2
 */
class Motion extends Daemon
{

    const EVENT_MOTION_START = 'motion_start';
    const EVENT_MOTION_STOP = 'motion_stop';
    const EVENT_MOTION_DETECTED = 'motion_detected';
    const EVENT_CAMERA_LOSS = 'motion_camera_lost';

    const TIMELAPSE = 'timelapse';

    /**
     * @var array of CamMotion
     */
    //private $camMotions = array();

    protected $dvr;

    /**
     * Набор id камер
     * @var array
     */
    protected array $cams_id;

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

    private function writeConfig()
    {
        $motionTemplatePath = Path::getPath(Path::getRoot(), Path::ETC) . "/templates/motion.conf";
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

        foreach ($this->cams_id as $id) {
            $threadPath = dirname($this->getConfigFile()) . "/thread_" . $id . ".conf";
            $threads .= "thread " . $threadPath . "\n";
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
        $settings['webcontrol_authentication'] = MOTION_HTTP_USER . ":" . MOTION_HTTP_PASS;

        $f = fopen($this->getConfigFile(), "w+");
        fwrite($f, MotionConfig::parseConfig($config, $settings));
        fclose($f);

        // добавить в конфиг threads и записать конфиг файлы for threads
    }

    /**
     * @return string Bash command
     */
    protected function getCommand(): string
    {
        $this->writeConfig();
        if (MOTION_USE_LOG)
            $log = "-l {$this->getLogFile()}";
        else
            $log = '-l /dev/null';

        return "motion -c {$this->getConfigFile()} -p {$this->getPidFile()} $log";
    }

    /*public function _stop()
    {
        $this->kill();  //он автоматом обрабатывает kill
    }*/
}
