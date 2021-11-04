<?php

namespace dvr\system\vlc;

use dvr\system\common\FileSource;
use dvr\system\common\SystemException;

/**
 * @deprecated вся логика в Outputs
 */
class VlmSource extends FileSource
{
    protected VlmCommand $create;
    protected VlmCommand $delete;

    public function __construct(
        string $name,
        string $uri,
        VlmCommand $create,
        VlmCommand $delete
    )
    {
        parent::__construct($name, $uri);

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
        $this->delete->execute();
    }

    /**
     * @throws SystemException
     */
    function create(): void
    {
        $this->create->execute();
    }
}