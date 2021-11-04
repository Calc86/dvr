<?php

namespace dvr\system\vlc;

use dvr\system\common\FileSource;
use dvr\system\common\SystemException;

/**
 *
 */
class VlmSource extends FileSource
{
    protected VlcTelnet $telnet;
    protected VlmCommand $create;
    protected VlmCommand $delete;

    public function __construct(
        string $name,
        string $uri,
        VlcTelnet $telnet,
        VlmCommand $create,
        VlmCommand $delete
    )
    {
        parent::__construct($name, $uri);

        $this->telnet = $telnet;
        $this->create = $create;
        $this->delete = $delete;
    }


    public function stop(): void
    {
        // nothing
    }

    public function start(): void
    {
        // nothing
    }

    /**
     * @throws SystemException
     */
    function delete(): void
    {
        $this->telnet->execute($this->delete);
    }

    /**
     * @throws SystemException
     */
    function create(): void
    {
        $this->telnet->execute($this->create);
    }
}