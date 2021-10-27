<?php

namespace app\modules\dvr\components\onvif\wsdl;

class ReceiverState
{
    const __default = 'NotConnected';
    const NotConnected = 'NotConnected';
    const Connecting = 'Connecting';
    const Connected = 'Connected';
    const Unknown = 'Unknown';


}
