<?php

namespace app\modules\dvr\components\onvif\wsdl;

class FaultCodesType
{
    const __default = 'tnsInvalidAddressingHeader';
    const tnsInvalidAddressingHeader = 'tns:InvalidAddressingHeader';
    const tnsInvalidAddress = 'tns:InvalidAddress';
    const tnsInvalidEPR = 'tns:InvalidEPR';
    const tnsInvalidCardinality = 'tns:InvalidCardinality';
    const tnsMissingAddressInEPR = 'tns:MissingAddressInEPR';
    const tnsDuplicateMessageID = 'tns:DuplicateMessageID';
    const tnsActionMismatch = 'tns:ActionMismatch';
    const tnsMessageAddressingHeaderRequired = 'tns:MessageAddressingHeaderRequired';
    const tnsDestinationUnreachable = 'tns:DestinationUnreachable';
    const tnsActionNotSupported = 'tns:ActionNotSupported';
    const tnsEndpointUnavailable = 'tns:EndpointUnavailable';


}
