<?php

namespace dvr\system\common;

interface IPath
{
    public function getRamFS(): string;
    public function getLocal(): string;
    public function getNfs(): string;
    public function getTmp(): string;
    public function getProc(): string;
    public function getLog(): string;
}