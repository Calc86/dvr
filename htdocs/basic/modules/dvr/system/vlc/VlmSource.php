<?php

namespace dvr\system\vlc;

use dvr\system\common\FileSource;
use dvr\system\common\SystemException;

class VlmSource extends FileSource
{
    protected VlmCommand $create;
    protected VlmCommand $delete;


    public function stop(): void
    {
        // nothing
    }

    public function start(): void
    {
        // nothing
    }

    function delete(): void
    {
        // nothing
    }

    function create(): void
    {
        // nothing
    }
}