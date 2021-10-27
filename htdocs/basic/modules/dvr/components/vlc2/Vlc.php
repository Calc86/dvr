<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 29.03.14 | 24.10.21
 * Time: 17:06
 */

namespace app\modules\dvr\components\vlc2;

use app\modules\dvr\components\common\Daemon;
use app\modules\dvr\components\common\DaemonConfig;
use app\modules\dvr\components\interfaces\IDVR;
use app\modules\dvr\components\telnet\Telnet;

/**
 * Class Vlc
 * Используем VLC в качестве dvr
 *
 * https://wiki.videolan.org/VLC_command-line_help/
 *
 * todo !! Password for Web interface has not been set.

Please use --http-password, or set a password in

Preferences > All > Main interfaces > Lua > Lua HTTP > Password.
 */
class Vlc extends Daemon
{
    private const INTERFACE = '-I http --http-host={host} --http-port {http} -I telnet --telnet-port {telnet}  --telnet-password {password}';
    //private const WITH_LOGS = '--extraintf=http:logger --file-logging --log-verbose {verbose} --logfile {file}';
    private const WITH_LOGS = '--extraintf=http --file-logging --log-verbose {verbose} --logfile {file}';   // logger deprecated
    private const NO_LOGS = '--extraintf=http';
//    private const SHELL = '{bin} --rtsp-tcp {hw} {daemon} {interface} --repeat --loop --live-caching {live_cache} "
//        ." --network-caching {network_cache} --sout-mux-caching {mux_cache}  --sout-ts-dts-delay {dts_delay} {vlm} "
//        ."--pidfile {pid} {logs}';
    private const SHELL = "{bin} {hw} {daemon} {interface} --http-password {password} --repeat --loop --live-caching {live_cache} "
        ." --network-caching {network_cache} --sout-mux-caching {mux_cache}  --sout-ts-dts-delay {dts_delay} {vlm} "
        ."--pidfile {pid} {logs}";  // убрал параметр --rtsp-tcp
    private const VALGRIND = '{valgrind} -v --trace-children=yes --log-file={log} --error-limit=no --leak-check=full {command}';

    /**
     * @var IDVR
     */
    protected IDVR $dvr;
    protected DaemonConfig $config;

    private int $httpPort;
    private int $telnetPort;

    /**
     * @param IDVR $dvr
     * @param string $name
     * @param Config|null $config
     */
    function __construct(IDVR $dvr, string $name = 'vlc', ?Config $config = null)
    {
        $this->dvr = $dvr;
        $this->config = $config ?? new Config();
        parent::__construct($this->dvr, $name, $this->config);

        $this->httpPort =  $this->config->httpPort + $this->dvr->getID();
        $this->telnetPort = $this->config->telnetPort + $this->dvr->getID();
    }

    /**
     * @return string
     */
    public function getCommand(): string
    {
        $vlc_vlm = '';  // todo 20211023 проверить потребность в этих настройках

        $params = [
            'host' => $this->config->host,
            'http' => $this->httpPort,
            'telnet' => $this->telnetPort,
            'password' => $this->config->telnetPassword,
        ];
        $vlc_ifs = $this->applyParams($params, self::INTERFACE);

        $params = [
            'verbose' => $this->config->verbose,
            'file' => $this->getLogFile(),
        ];
        $vlc_logs = $this->applyParams($params, $this->config->useLog ? self::WITH_LOGS : self::NO_LOGS);

        $hw = $this->config->withFFmpegHw ? '--ffmpeg-hw' : '';

        $params = [
            'bin' => $this->config->vlcPath,
            'hw' => $hw,
            'daemon' => $this->config->daemonOpts,
            'interface' => $vlc_ifs,
            'live_cache' => $this->config->liveCache,
            'network_cache' => $this->config->netCache,
            'mux_cache' => $this->config->soutCache,
            'dts_delay' => $this->config->dtsDelay,
            'vlm' => $vlc_vlm,
            'pid' => $this->getPidFile(),
            'logs' => $vlc_logs,
            'password' => $this->config->httpPassword,
        ];

        $vlc_shell = $this->applyParams($params, self::SHELL);

        if ($this->isValgrind()) {
            // утилита по тесту утечек памяти
            $params = [
                'valgrind' => 'valgrind',   //todo add to config
                'log' => $this->getValgrindFile(),
                'command' => $vlc_shell
            ];
            $vlc_shell = $this->applyParams($params, self::VALGRIND);
        }

        return $vlc_shell;
    }

    public function _stop()
    {
        $telnet = new Telnet();

        $f = $telnet->connect($this->config->host, $this->telnetPort);
        if (!$f) {
            $this->log("Порт закрыт");
        } else {
            $this->log("Успешное подключение {$this->config->host}, $this->telnetPort");
            $telnet->auth($this->config->telnetPassword);
            $telnet->write('shutdown');
            $this->log($telnet->read());
        }
    }
}
