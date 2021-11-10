<?php /** @noinspection HttpUrlsUsage */

namespace dvr\system\vlc;

use dvr\system\common\Output;
use dvr\system\common\Source;
use dvr\system\common\SystemException;
use dvr\system\Helpers;

/**
 * @property-read string $fullName
 */
class VlcOutput extends Output
{
    // https://wiki.videolan.org/VLC_command-line_help/
    //const VLM_HTTP_SIMPLE = '#std{access=http,mux=ts,dst={host}:{port}/{path}}';
    const VLM_HTTP = "#{transcode}std{access=http{mime={mime}},mux=ts{use-key-frames},dst={host}:{port}/{path}}";
    //              "#{$transcode}std{access=livehttp{seglen=5,delsegs=true,numsegs=15,splitanywhere=true,index=$path/stream-$camID.m3u8,index-url=http://10.154.28.203/lhttp/$userID/stream-$camID-########.ts},mux=ts{use-key-frames},dst=$path/stream-$camID-########.ts}"
    const VLM_HLS = "#{transcode}std{access=livehttp{seglen={seglen},delsegs=true,numsegs={numsegs},splitanywhere=false,index={part_path}/{name}.m3u8,index-url=http://{host}:{port}/{path}/{name}/part-########.ts},mux=ts{use-key-frames},dst={part_path}/{name}/part-########.ts}";
    const VLM_HLS2= "#{transcode}std{access=livehttp{seglen=60,delsegs=false,splitanywhere=false,index={part_path}/{name}.m3u8,index-url=http://host_full_uri/part-########.ts},mux=ts{use-key-frames},dst={part_path}/{name}/part-########.ts}";
    //              "#{$transcode}std{access=file{append},mux=ts{use-key-frames},dst=$filePath.avi}";
    const VLM_REC = "#{transcode}std{access=file{append},mux=ts{use-key-frames},dst={path}/{name}/{rec_name}.avi}";
    // "#rtp{dst=192.168.0.12,port=1234,sdp=rtsp://server.example.org:8080/test.sdp}"

    private const DEFAULT_TYPE = 'vlc';

    const PARAM_NAME = 'name';
    const PARAM_VLM = 'vlm';
    const PARAM_TYPE = 'type';
    const PARAM_TRANSCODE = 'transcode';
    const PARAM_MIME = 'mime';
    const PARAM_HOST = 'host';
    const PARAM_PORT = 'port';
    const PARAM_PATH = 'path';
    const PARAM_SCHEME = 'scheme';
    // hls
    const PARAM_HLS_SEGLEN = 'seglen';
    const PARAM_HLS_NUMSEGS = 'numsegs';
    const PARAM_HLS_PART = 'part_path';
    // rec
    const PARAM_REC = 'rec_name';

    protected string $mime = 'video/mp4';
    protected string $path = 'video.mp4';
    protected string $host = '0.0.0.0';
    protected int $port = 80;
    protected string $type;

    /** @var VlmCommand[] by name */
    protected array $commands = [
        'check',
        'stop',
        'delete',
    ];

    /**
     * @param VlcTelnet $telnet
     * @param Source $source
     * @param array $params
     */
    protected function __construct(
        VlcTelnet $telnet,
        Source $source,
        array $params = []
    )
    {
        // defaults
        /** @var Output $link */
        $link = $source;
        if(!isset($params[self::PARAM_SCHEME])) $params[self::PARAM_SCHEME] = 'http';
        if(!isset($params[self::PARAM_HOST])) $params[self::PARAM_HOST] = $this->host;
        if(!isset($params[self::PARAM_PORT])) $params[self::PARAM_PORT] = $this->port;
        if(!isset($params[self::PARAM_TRANSCODE])) $params[self::PARAM_TRANSCODE] = '';
        if(!isset($params[self::PARAM_MIME])) $params[self::PARAM_MIME] = $this->mime;
        if(!isset($params[self::PARAM_PATH])) $params[self::PARAM_PATH] = $this->path;
        if(!isset($params[self::PARAM_NAME])) $params[self::PARAM_NAME] = $source->name;

        if($source instanceof Output) $this->hasInput = true;
        $this->host = $params[self::PARAM_HOST];
        $this->port = $params[self::PARAM_PORT];
        $this->type = /*$source->name . '_' . */($params[self::PARAM_TYPE] ?? self::DEFAULT_TYPE);

        parent::__construct(
            $source->name,
            $this->hasInput ? $link->localUri : Helpers::applyParams($params, Helpers::URL)
        );

        if(!isset($params[self::PARAM_REC])) $params[self::PARAM_REC] = $this->fullName;

        $commands = [];
        foreach ($this->commands as $command) {
            $commands[$command] = new VlmTelnetCommand($telnet, $command, $command . ' ' . $this->name);
        }
        $this->commands = $commands;

        $this->commands['start'] = VlmTelnetCommand::from(
            $telnet,
            VlmCommand::control($this->fullName, VlmCommand::COMMAND_PLAY)
        );

        $this->commands['new'] = VlmTelnetCommand::from(
            $telnet,
            VlmCommand::create($this->fullName)
        );

        $this->commands['input'] = VlmTelnetCommand::from(
            $telnet,
            VlmCommand::input($this->fullName, $this->hasInput ? $link->localUri : $source->uri)
        );

        // apply params for vlm template
        //if (empty($vlm)) $vlm = self::VLM_HTTP; //'#std{access=http,mux=ts,dst={host}:{port}/{path}}';
        $this->commands['output'] = VlmTelnetCommand::from(
            $telnet,
            VlmCommand::output($this->fullName, Helpers::applyParams($params, $params[self::PARAM_VLM]))
        );
        //setup CAM_101_live output #std{access=http,mux=ts,dst=0.0.0.0:9101/cam_101}
    }

    /**
     * @return string
     * @noinspection PhpUnused
     */
    protected function getFullName(): string
    {
        return $this->name . '_' . $this->type;
    }

    /**
     *
     */
    function getLocalUri(): string
    {
        return $this->uri; //todo
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
        // one input, one output
        // new
        $this->commands['new']->execute();
        // input
        $this->commands['input']->execute();
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

    /**
     * @param VlcTelnet $telnet
     * @param Source $source
     * @param int $port
     * @param string $host
     * @param array $params
     * @return static
     */
    public static function http(
        VlcTelnet $telnet,
        Source $source,
        int $port,
        string $host = '0.0.0.0',
        array $params = []
    ): self
    {
        $params[self::PARAM_PORT] = $port;
        $params[self::PARAM_HOST] = $host;
        $params[self::PARAM_VLM] = self::VLM_HTTP;
        $params[self::PARAM_TYPE] = 'http';

        return new self($telnet, $source, $params);
    }

    /**
     * @param VlcTelnet $telnet
     * @param Source $source
     * @param string $path
     * @return static
     */
    public static function rec(
        VlcTelnet $telnet,
        Source $source,
        string $path
    ): self
    {
        $params[self::PARAM_VLM] = self::VLM_REC;
        $params[self::PARAM_PATH] = $path;
        //$params[self::PARAM_REC] = $source->name;
        $params[self::PARAM_TYPE] = 'rec';

        return new self($telnet, $source, $params);
    }

    /**
     * @param VlcTelnet $telnet
     * @param Source $source
     * @param string $path from file root for part files
     * @param int $port
     * @param string $host
     * @param array $params
     * @return static
     * @noinspection PhpUnused
     */
    public static function hls(
        VlcTelnet $telnet,
        Source $source,
        string $path,
        int $port,
        string $host = '0.0.0.0',
        array $params = []
    ): self
    {
        $params[self::PARAM_PORT] = $port;
        $params[self::PARAM_HOST] = $host;
        $params[self::PARAM_VLM] = self::VLM_HLS;
        $params[self::PARAM_PATH] = 'hls';
        $params[self::PARAM_HLS_PART] = $path;
        $params[self::PARAM_HLS_SEGLEN] = 5;
        $params[self::PARAM_HLS_NUMSEGS] = 5;
        $params[self::PARAM_TYPE] = 'hls';

        return new self($telnet, $source, $params);
    }

    public static function hls2(
        VlcTelnet $telnet,
        Source $source,
        string $path,
        array $params = []
    ): self
    {
        $params[self::PARAM_VLM] = self::VLM_HLS2;
        $params[self::PARAM_PATH] = 'hls';
        $params[self::PARAM_HLS_PART] = $path;
        $params[self::PARAM_TYPE] = 'hls2';

        return new self($telnet, $source, $params);
    }
}
