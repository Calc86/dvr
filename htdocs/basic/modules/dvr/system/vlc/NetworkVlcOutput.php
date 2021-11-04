<?php

namespace dvr\system\vlc;

use dvr\system\common\NetworkOutput;
use dvr\system\common\Output;
use dvr\system\common\Source;
use dvr\system\common\SystemException;
use dvr\system\Helpers;

class NetworkVlcOutput extends NetworkOutput
{
    private const POSTFIX = '_live';
    private const VLM_OUT = "#{transcode}std{access=http{mime={mime}},mux=ts{use-key-frames},dst={host}:{port}/{path}}";

    protected string $mime = 'video/mp4';
    protected string $path = 'video.mp4';

//    protected string $vlmOut;

    /** @var VlmCommand[] by name */
    protected array $commands = [
        'check',
        'stop',
        'delete',
    ];

    public function __construct(VlcTelnet $telnet, Source $source, int $port, ?string $vlm = null)
    {
        if($source instanceof Output) $this->hasInput = true;
        $this->host = '0.0.0.0';
        $this->port = $port;

        parent::__construct($source->name . static::POSTFIX, $source->uri);

        $commands = [];
        foreach ($this->commands as $command) {
            $commands[$command] = new VlmTelnetCommand($telnet, $command, $command . ' ' . $this->name);
        }
        $this->commands = $commands;

        $this->commands['start'] = VlmTelnetCommand::from(
            $telnet,
            VlmCommand::control($this->name, VlmCommand::COMMAND_PLAY)
        );

        $this->commands['new'] = VlmTelnetCommand::from(
            $telnet,
            VlmCommand::create($this->name)
        );

        $this->commands['input'] = VlmTelnetCommand::from(
            $telnet,
            VlmCommand::input($this->name, $source->uri)
        );

        if (empty($vlm)) $vlm = '#std{access=http,mux=ts,dst={host}:{port}/{path}}';
        $this->commands['output'] = VlmTelnetCommand::from(
            $telnet,
            VlmCommand::output($this->name, Helpers::applyParams([
                'host' => $this->host,
                'port' => $this->port,
                'path' => $this->path,
            ], $vlm))
        );
        //setup CAM_101_live output #std{access=http,mux=ts,dst=0.0.0.0:9101/cam_101}
    }

//    public function init()
//    {
//        parent::init();
//
//        $params = [
//            'transcode' => '',  // todo
//            'mime' => $this->mime,
//            'host' => $this->host,
//            'port' => $this->port,
//            'path' => $this->path,
//        ];
//        $this->vlmOut = Helpers::applyParams($params, self::VLM_OUT);
//    }

    function getLocalUri(): string
    {
        // TODO: Implement getLocalUri() method.
    }

    /**
     * @throws SystemException
     */
    public function stop(): void
    {
        $this->commands['stop']->execute();
    }

    /**
     * @throws SystemException
     */
    public function start(): void
    {
        $this->commands['start']->execute();
        // todo play??
    }

    /**
     * @throws SystemException
     */
    function delete(): void
    {
        $this->commands['delete']->execute();
    }

    /**
     * @throws SystemException
     */
    function create(): void
    {

        if(!$this->hasInput) {
            // new
            $this->commands['new']->execute();
            // input
            $this->commands['input']->execute();
        }
        // output
        $this->commands['output']->execute();
    }

    /**
     * @throws SystemException
     */
    function check(): void
    {
        $this->commands['check']->execute();
    }
}