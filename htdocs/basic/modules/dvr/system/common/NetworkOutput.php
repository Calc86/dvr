<?php

namespace dvr\system\common;

abstract class NetworkOutput extends Output
{
    protected string $host;
    protected int $port;
}