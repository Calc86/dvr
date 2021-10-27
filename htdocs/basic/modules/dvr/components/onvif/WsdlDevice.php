<?php

namespace app\modules\dvr\components\onvif;

use Rockyjvec\Onvif\Service\Device;

/**
 * http://www.onvif.org/ver10/device/wsdl/devicemgmt.wsdl
 *
 * @method GetCapabilities 14
 * @method GetDeviceInformation 19
 * @method GetDiscoveryMode 20
 * @method GetDNS 21
 * @method GetDPAddresses 26
 * @method GetDynamicDNS 27
 * @method GetEndpointReference 28
 * @method GetGeoLocation 29
 * @method GetHostname 30
 * @method GetNetworkDefaultGateway 32
 * @method GetNetworkInterfaces 33
 * @method GetNetworkProtocols 34
 * @method GetNTP 35
 * @method GetRelayOutputs 37 This method has been depricated with version 2.0. Refer to the DeviceIO service.
 * @method GetServiceCapabilities 41
 * @method GetServices 42
 * @method GetStorageConfiguration 43
 * @method GetStorageConfigurations 44
 * @method GetSystemBackup 45
 * @method GetSystemDateAndTime 46
 * @method GetSystemSupportInformation 48
 * @method GetSystemUris 49
 * @method GetWsdlUrl 51
 *
 */
class WsdlDevice extends Device
{

}
