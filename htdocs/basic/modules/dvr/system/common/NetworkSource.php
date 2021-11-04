<?php

namespace dvr\system\common;

abstract class NetworkSource extends Source
{
    public function check(): void
    {
        // TODO: check network port/host/etc
    }
}
