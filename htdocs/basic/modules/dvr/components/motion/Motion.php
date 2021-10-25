<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 07.04.14
 * Time: 17:41
 */

namespace app\modules\dvr\components\motion;

use app\modules\dvr\components\common\Daemon;
use app\modules\dvr\components\common\Path;
use app\modules\dvr\components\interfaces\IDVR;

/**
 * Class Motion
 * @package system2
 */
class Motion extends Daemon
{
    private const SHELL = '{bin} -c {config} -p {pid} {log}';

    const EVENT_START = 'motion_start';
    const EVENT_STOP = 'motion_stop';
    const EVENT_DETECTED = 'motion_detected';
    const EVENT_CAMERA_LOSS = 'motion_camera_lost';

    const TIMELAPSE = 'timelapse';

    protected IDVR $dvr;
    protected \app\modules\dvr\components\common\DaemonConfig $config;

    /**
     * Набор id камер
     * @var array
     */
    protected array $cams_id;

    /**
     * @param IDVR $dvr
     * @param array $cams_id
     * @param Config|null $config
     */
    function __construct(IDVR $dvr, array $cams_id, ?Config $config = null)
    {
        $this->config = $config ?? new Config();

        $this->dvr = $dvr;
        $this->cams_id = $cams_id;
        parent::__construct($this->dvr, "motion");
    }

    private function writeConfig()
    {
        $motionTemplatePath = $this->config->getPath(
            $this->config->getRoot(), $this->config->etc) . "/templates/motion.conf";
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
        $settings['webcontrol_port'] = $this->config->httpPort + $this->dvr->getID();
        $settings['webcontrol_localhost'] = $this->config->motionHttpLocalhost;
        $settings['webcontrol_html_output'] = $this->config->html;
        $settings['webcontrol_authentication'] = $this->config->user . ":" . $this->config->password;

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
        if ($this->config->useLog)
            $log = "-l {$this->getLogFile()}";
        else
            $log = '-l /dev/null';

        $params = [
            'bin' => $this->config->motionPath,
            'config' => $this->getConfigFile(),
            'pid' => $this->getPidFile(),
            'log' => $log,
        ];

        return $this->applyParams($params, self::SHELL);
        //return "motion -c {$this->getConfigFile()} -p {$this->getPidFile()} $log";
    }

    /*public function _stop()
    {
        $this->kill();  //он автоматом обрабатывает kill
    }*/
}
