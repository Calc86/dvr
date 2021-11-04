<?php

namespace dvr\system\vlc;

use dvr\system\common\Command;
use dvr\system\common\SystemException;
use dvr\system\Helpers;

/**
 * https://wiki.videolan.org/Documentation:Streaming_HowTo/VLM/
 */
class VlmCommand extends Command
{
    protected const VLM_NEW = 'new {name} broadcast enabled loop';
    protected const VML_SETUP_IN = 'setup {name} input {uri}';
    protected const VLM_SETUP_OUT = 'setup {name} output {vlm}';
    protected const VLM_CONTROL = 'control {name} {command}';
    protected const VLM_SHOW = 'show {name}';
    protected const VLM_DELETE = 'del {name}';
    protected const VLM_OPTION = 'setup {name} option {option}';

    public const COMMAND_PLAY = 'play';

    protected string $name;
    protected string $cmd;

    public function __construct(string $name, string $cmd, array $params = [])
    {
        parent::__construct();

        $this->name = $name;
        $params['name'] = $this->name;
        $this->cmd = Helpers::applyParams($params, $cmd);
    }

    /**
     * @param $name
     * @return static
     *
     * new bg broadcast loop enabled
     */
    public static function create($name): self
    {
        return new static($name, self::VLM_NEW);
    }

    /**
     * @param $name
     * @param $uri
     * @return static
     *
     * setup bg input file:///mnt/data/test/test_video1.ts
     */
    public static function input($name, $uri): self
    {
        return new static($name, self::VML_SETUP_IN, ['uri' => $uri]);
    }

    /**
     * @param $name
     * @param $vlm
     * @return static
     *
     * setup bg output #std{access=http,mux=ts,dst=0.0.0.0:9001/path}
     */
    public static function output($name, $vlm): self
    {
        return new static($name, self::VLM_SETUP_OUT, ['vlm' => $vlm]);
    }

    /**
     * @param string $name
     * @param string $command
     * @return static
     *
     * control bg play
     */
    public static function control(string $name, string $command): self
    {
        return new static($name, self::VLM_CONTROL, ['command' => $command]);
    }

    public static function show(string $name): self
    {
        return new static($name, self::VLM_SHOW);
    }

    public static function del(string $name): self
    {
        return new static($name, self::VLM_DELETE);
    }

    /**
     * @param string $name
     * @param string $option
     * @return static
     *
     * setup bg option audio-language=ru
     * setup bg option keep-all
     */
    public static function option(string $name, string $option): self
    {
        return new static($name, self::VLM_OPTION, ['option' => $option]);
    }

    /**
     * @throws SystemException
     */
    public function execute(): void
    {
        throw new SystemException("execute mot implemented");
    }
}
