<?php

namespace dvr\system\ffmpeg;

use dvr\system\common\BashCommand;
use dvr\system\Helpers;

/**
 * https://gist.github.com/lukebussey/4d27678c72580aeb660c19a6fb73e9ee
 * https://stackoverflow.com/questions/30912542/mp4-to-hls-using-ffmpeg
 * http://ffmpeg.org/ffmpeg-all.html#hls-2
 */
class HlsCommand extends BashCommand
{
    const SIZE_480P = '854x480';
    const SIZE_720P = '1280x720';
    const SIZE_1080P = '1920x1080';
    //get pid# myCommand & echo $!

    //ffmpeg -i input.mp4 -profile:v baseline -level 3.0 -s 640x360 -start_number 0 -hls_time 10 -hls_list_size 0 -f hls index.m3u8
    // todo /dev/null?
    //const CMD = 'ffmpeg -i {input} -profile:v baseline -s {size} -start_number 0 -hls_time {duration} -hls_list_size 0 -f hls {path}/{name}.m3u8 -hls_segment_filename={path}/part-%08d.ts & echo $! >> {pid_file}';
    const CMD = 'ffmpeg -nostdin -i {input} -profile:v baseline -level 3.0 -s {size} -start_number 0 -hls_time {duration} -hls_segment_filename \'{path}/part-%08d.ts\' -hls_list_size 0 -f hls {path}/{name}.m3u8 & echo $! >> {pid} &';
    public string $pidFile;

    public function __construct(string $cmd, string $pidFile)
    {
        parent::__construct($cmd);
        $this->pidFile = $pidFile;
    }

    public static function create(string $input, string $size, int $duration, string $path, string $name, string $pidFile): self
    {
        $params = [
            'input' => $input,
            'size' => $size,
            'duration' => $duration,
            'name' => $name . '_' . $size,
            'pid' => self::pidPath($pidFile, $size . '.pid'),
            'path' => $path,
        ];
        return new self(Helpers::applyParams($params, self::CMD), $pidFile);
    }

    protected static function pidPath(string $file, string $postfix): string
    {
        return str_replace('.pid', $postfix, $file);
    }

//    /** @noinspection PhpUnused */
//    public static function to480(string $input, string $path, string $name, int $duration, string $pidFile): self
//    {
//        return self::create($input, self::SIZE_480P, $duration, $path, $name . '_480', self::pidPath($pidFile, '_480.pid'));
//    }
//
//    /** @noinspection PhpUnused */
//    public static function to720(string $input, string $path, string $name, int $duration, string $pidFile): self
//    {
//        return self::create($input, self::SIZE_720P, $duration, $path, $name . '_720', self::pidPath($pidFile, '_720.pid'));
//    }
//
//    /** @noinspection PhpUnused */
//    public static function to1080(string $input, string $path, string $name, int $duration, string $pidFile): self
//    {
//        return self::create($input, self::SIZE_1080P, $duration, $path, $name . '_1080', self::pidPath($pidFile, '_1080.pid'));
//    }
}
