<?php

namespace dvr\system\vlc;

use dvr\system\common\Auth;
use dvr\system\common\BashCommand;
use dvr\system\common\Daemon;
use dvr\system\common\Dvr;
use dvr\system\common\Output;
use dvr\system\common\Path;
use dvr\system\common\Source;
use dvr\system\common\SystemException;
use dvr\system\Helpers;
use Yii;
use yii\base\InvalidConfigException;

/**
 * Dvr by vlc
 */
class Vlc extends Dvr
{
    const OUT_LIVE = 'live';
    const OUT_HLS = 'hls';

    private const INTERFACE = '-I http --http-host={host} --http-port {http} -I telnet --telnet-port {telnet}  --telnet-password {password}';
    private const WITH_LOGS = '--extraintf=http --file-logging --log-verbose {verbose} --logfile {file}';   // logger deprecated
    private const NO_LOGS = '--extraintf=http';
    private const SHELL = "{bin} {hw} {daemon} {interface} --http-password {password} --repeat --loop --live-caching {live_cache} "
    . " --network-caching {network_cache} --sout-mux-caching {mux_cache}  --sout-ts-dts-delay {dts_delay} {vlm} "
    . "--pidfile {pid} {logs}";  // убрал параметр --rtsp-tcp

    protected BashCommand $command;
    protected Daemon $daemon;

    public string $vlcBin = 'cvlc';
    protected int $portHttp;
    protected int $portTelnet;
    protected bool $hwAccelerate = false;
    protected bool $useLog = true;
    protected int $logLevel = 0;    // 0-10?
    //protected VlcTelnet $telnet;
    /** @var Source[]  */
    protected array $sources = [];
    protected VlcTelnet $telnet;

    /** @var VlmCommand[] by name */
    protected array $commands = [
        'stop',
        'status'
    ];

    /**
     * @throws InvalidConfigException
     */
    public function init()
    {
        $this->portHttp = $this->requestPort();
        $this->portTelnet = $this->requestPort();
        /** @var VlcTelnet $telnetTemplate */
        $telnetTemplate = Yii::$app->get(VlcTelnet::DEFAULT);
        $this->telnet = $telnetTemplate->copy($this->host, $this->portTelnet);
        $this->command = $this->buildCommand();

        $commands = [];
        foreach ($this->commands as $command) {
            $commands[$command] = new VlmTelnetCommand($this->telnet, $command, $command);
        }

        $this->commands = $commands;

        parent::init();
    }

    protected function getName(): string
    {
        return 'vlc';
    }

    protected function buildCommand(): BashCommand
    {
        $vlc_vlm = '';  // todo 20211023 проверить потребность в этих настройках

        $params = [
            'host' => $this->host,
            'http' => $this->portHttp,
            'telnet' => $this->portTelnet,
            'password' => $this->telnet->password,
        ];

        $vlc_ifs = Helpers::applyParams($params, self::INTERFACE);

        $params = [
            'verbose' => $this->logLevel,
            'file' => Path::path($this->log, $this->name, 'log'),
        ];
        $vlc_logs = Helpers::applyParams($params, $this->useLog ? self::WITH_LOGS : self::NO_LOGS);

        $hw = $this->hwAccelerate ? '--ffmpeg-hw' : '';

        $params = [
            'bin' => $this->vlcBin,
            'hw' => $hw,
            'daemon' => '-d',
            'interface' => $vlc_ifs,
            'live_cache' => 500,
            'network_cache' => 500,
            'mux_cache' => 500,
            'dts_delay' => 0,
            'vlm' => $vlc_vlm,
            'pid' => Path::path($this->proc, $this->name, 'pid'),
            'logs' => $vlc_logs,
            'password' => $this->telnet->password,
        ];

        $vlc_shell = Helpers::applyParams($params, self::SHELL);

        if ($this->valgrind) {
            // утилита по тесту утечек памяти
            $params = [
                'valgrind' => 'valgrind',   //todo add to config
                'log' => Path::path($this->log, $this->name, 'valgrind'),
                'command' => $vlc_shell
            ];
            $vlc_shell = Helpers::applyParams($params, self::VALGRIND);
        }

        return new BashCommand($vlc_shell);
    }

    public function createSource(string $name, string $uri, ?Auth $auth = null): Source
    {
        $s = new VlmSource(
            $name,
            $uri,
            VlmTelnetCommand::from($this->telnet, VlmCommand::create($name)),
            VlmTelnetCommand::from($this->telnet, VlmCommand::del($name))
        );
        $this->sources[] = $s;
        return $s;
    }

    /**
     * @throws SystemException
     */
    public function createOutput(Source $source, string $type): Output
    {
        switch ($type) {
            case self::OUT_LIVE:
                $o = new NetworkVlcOutput($this->telnet, $source, $this->requestPort());
                $this->outputs[] = $o;
                return $o;
            case self::OUT_HLS:
                // todo hls
                break;
        }
        throw new SystemException("unknown output type ".$type);
    }

    public function start()
    {
        $this->command->execute();
        sleep(5);   // todo wait for network connection
        //echo $this->command->cmd;

        parent::start();
    }

    /**
     * @throws SystemException
     */
    public function stop()
    {
        $this->commands['stop']->execute();

        parent::stop();
    }

    /**
     * @throws SystemException
     */
    public function status()
    {
        $this->commands['status']->execute();
    }
}
