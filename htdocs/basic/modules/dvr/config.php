<?php


use dvr\system\vlc\VlcTelnet;

return [
    //'bootstrap' => [],
    'components' => [
        VlcTelnet::DEFAULT => [
            'class' => VlcTelnet::class,
//            'host' => '0.0.0.0',
            'password' => 'qwerty',
        ]
    ],
];
