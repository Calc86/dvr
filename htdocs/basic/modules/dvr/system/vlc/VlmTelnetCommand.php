<?php

namespace dvr\system\vlc;

use dvr\system\common\SystemException;

/**
 *
 */
class VlmTelnetCommand extends VlmCommand
{
    protected VlcTelnet $telnet;

    public function __construct(VlcTelnet $telnet, string $name, string $cmd, array $params = [])
    {
        parent::__construct($name, $cmd, $params);

        $this->telnet = $telnet;
    }

    /**
     * @throws SystemException
     */
    public function execute(): void
    {
        $this->telnet->connect();
        $this->telnet->auth();
        $this->telnet->write($this->cmd);
        $this->telnet->disconnect();
    }

    public static function from(VlcTelnet $telnet, VlmCommand $command): self
    {
        $cmd = new static($telnet, $command->name, '', []);
        $cmd->cmd = $command->cmd;
        return $cmd;
    }
}
