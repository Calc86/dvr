<?php

namespace app\modules\dvr\components\onvif\wsdl;

class SearchState
{
    const __default = 'Queued';
    const Queued = 'Queued';
    const Searching = 'Searching';
    const Completed = 'Completed';
    const Unknown = 'Unknown';


}
