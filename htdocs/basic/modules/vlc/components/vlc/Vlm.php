<?php

namespace app\modules\vlc\components\vlc;

use app\modules\vlc\types\CamName;
use app\modules\vlc\types\Port;
use app\modules\vlc\types\Url;
use app\modules\vlc\types\VLMCommand;
use app\modules\vlc\types\YesNo;

/**
 * Все команды это vlm инструкции
 * $cam полное имя камеры: UID_{uid}__CID_{id}_live
 */
class Vlm extends VlcHttp
{
    /**
     * @param Port $port
     */
    public function __construct(Port $port)
    {
        parent::__construct($port, new Url('requests/vlm_cmd.xml?command='));
    }

    /**
     * @param CamName $cam
     */
    public function _new(CamName $cam)
    {
        $this->cmd(new VLMCommand("new $cam broadcast enabled loop"));
    }

    /**
     * @param CamName $cam
     * @param VLMCommand $cmd
     * @param YesNo|null $io
     */
    public function _setup(CamName $cam, VLMCommand $cmd, ?YesNo $io = null)
    {
        //todo: io заменить на значения из VLC комманда?
        if ($io == null) $io = new YesNo(true);
        $direction = '';
        switch ($io->get()) {
            case false:
                $direction = 'input';
                //$this->cmd("setup $cam input \"$cmd\"");
                break;
            case true:
                $direction = 'output';
                //$this->cmd("setup $cam output $cmd");
                break;
        }
        $vlm = new VLMCommand("setup $cam $direction $cmd");
        $this->cmd($vlm);
    }

    /**
     * @param CamName $cam
     * @param VLMCommand $cmd
     */
    public function _control(CamName $cam, VLMCommand $cmd)
    {
        $vlm = new VLMCommand("control $cam $cmd");
        $this->cmd($vlm);
    }

    /**
     * @param CamName $cam
     */
    public function _show(CamName $cam)
    {
        $this->cmd(new VLMCommand("show $cam"));
    }

    /**
     * @param CamName $cam
     */
    public function _del(CamName $cam)
    {
        $this->cmd(new VLMCommand("del $cam"));
    }

    /**
     * @return string
     */
    public function message(): string
    {
        return $this->msg;
    }
}
