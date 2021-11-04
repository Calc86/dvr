<?php

namespace dvr\system\common;

/**
 * @property-read string $file
 */
abstract class FileSource extends Source
{
    public string $file;

    /**
     * @throws SystemException
     */
    public function init()
    {
        parent::init();
        $part = parse_url($this->uri);

        $this->file = $part['path'];
        $this->check();
    }

    /**
     * @throws SystemException
     */
    public function check(): void
    {
        if (empty($this->file))
            throw new SystemException("file is empty");
        if (!file_exists($this->file))
            throw new SystemException("file $this->file not exists");
    }
}