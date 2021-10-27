<?php

namespace app\modules\dvr\components\onvif\wsdl;

use Rockyjvec\Onvif\Service\Device;

class DeviceService extends Device
{
    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'IntRange' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IntRange',
      'Vector2D' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Vector2D',
      'Vector1D' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Vector1D',
      'PTZVector' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZVector',
      'PTZStatus' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZStatus',
      'PTZMoveStatus' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZMoveStatus',
      'Vector' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Vector',
      'Rectangle' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Rectangle',
      'Polygon' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Polygon',
      'Color' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Color',
      'ColorCovariance' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ColorCovariance',
      'ColorDescriptor' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ColorDescriptor',
      'ColorCluster' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ColorCluster',
      'Transformation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Transformation',
      'TransformationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\TransformationExtension',
      'GeoLocation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GeoLocation',
      'GeoOrientation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GeoOrientation',
      'LocalLocation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\LocalLocation',
      'LocalOrientation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\LocalOrientation',
      'LocationEntity' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\LocationEntity',
      'base64Binary' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\base64Binary',
      'hexBinary' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\hexBinary',
      'Envelope' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Envelope',
      'Header' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Header',
      'Body' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Body',
      'Fault' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Fault',
      'faultreason' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\faultreason',
      'reasontext' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\reasontext',
      'faultcode' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\faultcode',
      'subcode' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\subcode',
      'detail' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\detail',
      'NotUnderstoodType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NotUnderstoodType',
      'SupportedEnvType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SupportedEnvType',
      'UpgradeType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\UpgradeType',
      'EndpointReferenceType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\EndpointReferenceType',
      'ReferenceParametersType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ReferenceParametersType',
      'MetadataType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MetadataType',
      'RelatesToType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RelatesToType',
      'AttributedURIType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AttributedURIType',
      'AttributedUnsignedLongType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AttributedUnsignedLongType',
      'AttributedQNameType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AttributedQNameType',
      'AttributedAnyType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AttributedAnyType',
      'ProblemActionType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ProblemActionType',
      'BaseFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\BaseFaultType',
      'ErrorCode' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ErrorCode',
      'Description' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Description',
      'FaultCause' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FaultCause',
      'Documentation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Documentation',
      'ExtensibleDocumented' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ExtensibleDocumented',
      'QueryExpressionType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\QueryExpressionType',
      'TopicNamespaceType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\TopicNamespaceType',
      'Topic' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Topic',
      'TopicType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\TopicType',
      'TopicSetType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\TopicSetType',
      'TopicExpressionType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\TopicExpressionType',
      'FilterType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FilterType',
      'SubscriptionPolicyType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SubscriptionPolicyType',
      'NotificationProducerRP' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NotificationProducerRP',
      'SubscriptionManagerRP' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SubscriptionManagerRP',
      'NotificationMessageHolderType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NotificationMessageHolderType',
      'Message' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Message',
      'Notify' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Notify',
      'UseRaw' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\UseRaw',
      'Subscribe' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Subscribe',
      'SubscriptionPolicy' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SubscriptionPolicy',
      'SubscribeResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SubscribeResponse',
      'GetCurrentMessage' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetCurrentMessage',
      'GetCurrentMessageResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetCurrentMessageResponse',
      'SubscribeCreationFailedFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SubscribeCreationFailedFaultType',
      'InvalidFilterFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\InvalidFilterFaultType',
      'TopicExpressionDialectUnknownFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\TopicExpressionDialectUnknownFaultType',
      'InvalidTopicExpressionFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\InvalidTopicExpressionFaultType',
      'TopicNotSupportedFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\TopicNotSupportedFaultType',
      'MultipleTopicsSpecifiedFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MultipleTopicsSpecifiedFaultType',
      'InvalidProducerPropertiesExpressionFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\InvalidProducerPropertiesExpressionFaultType',
      'InvalidMessageContentExpressionFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\InvalidMessageContentExpressionFaultType',
      'UnrecognizedPolicyRequestFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\UnrecognizedPolicyRequestFaultType',
      'UnsupportedPolicyRequestFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\UnsupportedPolicyRequestFaultType',
      'NotifyMessageNotSupportedFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NotifyMessageNotSupportedFaultType',
      'UnacceptableInitialTerminationTimeFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\UnacceptableInitialTerminationTimeFaultType',
      'NoCurrentMessageOnTopicFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NoCurrentMessageOnTopicFaultType',
      'GetMessages' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetMessages',
      'GetMessagesResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetMessagesResponse',
      'DestroyPullPoint' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DestroyPullPoint',
      'DestroyPullPointResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DestroyPullPointResponse',
      'UnableToGetMessagesFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\UnableToGetMessagesFaultType',
      'UnableToDestroyPullPointFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\UnableToDestroyPullPointFaultType',
      'CreatePullPoint' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CreatePullPoint',
      'CreatePullPointResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CreatePullPointResponse',
      'UnableToCreatePullPointFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\UnableToCreatePullPointFaultType',
      'Renew' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Renew',
      'RenewResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RenewResponse',
      'UnacceptableTerminationTimeFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\UnacceptableTerminationTimeFaultType',
      'Unsubscribe' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Unsubscribe',
      'UnsubscribeResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\UnsubscribeResponse',
      'UnableToDestroySubscriptionFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\UnableToDestroySubscriptionFaultType',
      'PauseSubscription' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PauseSubscription',
      'PauseSubscriptionResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PauseSubscriptionResponse',
      'ResumeSubscription' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ResumeSubscription',
      'ResumeSubscriptionResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ResumeSubscriptionResponse',
      'PauseFailedFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PauseFailedFaultType',
      'ResumeFailedFaultType' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ResumeFailedFaultType',
      'Include' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IncludeCustom',
      'DeviceEntity' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DeviceEntity',
      'IntRectangle' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IntRectangle',
      'IntRectangleRange' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IntRectangleRange',
      'FloatRange' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FloatRange',
      'DurationRange' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DurationRange',
      'IntItems' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IntItems',
      'FloatItems' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FloatItems',
      'StringItems' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\StringItems',
      'AnyHolder' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AnyHolder',
      'VideoSource' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoSource',
      'VideoSourceExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoSourceExtension',
      'VideoSourceExtension2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoSourceExtension2',
      'AudioSource' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AudioSource',
      'Profile' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Profile',
      'ProfileExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ProfileExtension',
      'ProfileExtension2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ProfileExtension2',
      'ConfigurationEntity' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ConfigurationEntity',
      'VideoSourceConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoSourceConfiguration',
      'VideoSourceConfigurationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoSourceConfigurationExtension',
      'VideoSourceConfigurationExtension2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoSourceConfigurationExtension2',
      'Rotate' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Rotate',
      'RotateExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RotateExtension',
      'LensProjection' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\LensProjection',
      'LensOffset' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\LensOffset',
      'LensDescription' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\LensDescription',
      'VideoSourceConfigurationOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoSourceConfigurationOptions',
      'VideoSourceConfigurationOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoSourceConfigurationOptionsExtension',
      'VideoSourceConfigurationOptionsExtension2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoSourceConfigurationOptionsExtension2',
      'RotateOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RotateOptions',
      'RotateOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RotateOptionsExtension',
      'SceneOrientation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SceneOrientation',
      'VideoEncoderConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoEncoderConfiguration',
      'VideoResolution' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoResolution',
      'VideoRateControl' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoRateControl',
      'Mpeg4Configuration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Mpeg4Configuration',
      'H264Configuration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\H264Configuration',
      'VideoEncoderConfigurationOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoEncoderConfigurationOptions',
      'VideoEncoderOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoEncoderOptionsExtension',
      'VideoEncoderOptionsExtension2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoEncoderOptionsExtension2',
      'JpegOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\JpegOptions',
      'JpegOptions2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\JpegOptions2',
      'Mpeg4Options' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Mpeg4Options',
      'Mpeg4Options2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Mpeg4Options2',
      'H264Options' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\H264Options',
      'H264Options2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\H264Options2',
      'VideoEncoder2Configuration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoEncoder2Configuration',
      'VideoResolution2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoResolution2',
      'VideoRateControl2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoRateControl2',
      'VideoEncoder2ConfigurationOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoEncoder2ConfigurationOptions',
      'AudioSourceConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AudioSourceConfiguration',
      'AudioSourceConfigurationOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AudioSourceConfigurationOptions',
      'AudioSourceOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AudioSourceOptionsExtension',
      'AudioEncoderConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AudioEncoderConfiguration',
      'AudioEncoderConfigurationOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AudioEncoderConfigurationOptions',
      'AudioEncoderConfigurationOption' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AudioEncoderConfigurationOption',
      'AudioEncoder2Configuration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AudioEncoder2Configuration',
      'AudioEncoder2ConfigurationOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AudioEncoder2ConfigurationOptions',
      'VideoAnalyticsConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoAnalyticsConfiguration',
      'MetadataConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MetadataConfiguration',
      'MetadataConfigurationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MetadataConfigurationExtension',
      'PTZFilter' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZFilter',
      'EventSubscription' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\EventSubscription',
      'MetadataConfigurationOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MetadataConfigurationOptions',
      'MetadataConfigurationOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MetadataConfigurationOptionsExtension',
      'MetadataConfigurationOptionsExtension2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MetadataConfigurationOptionsExtension2',
      'PTZStatusFilterOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZStatusFilterOptions',
      'PTZStatusFilterOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZStatusFilterOptionsExtension',
      'VideoOutput' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoOutput',
      'VideoOutputExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoOutputExtension',
      'VideoOutputConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoOutputConfiguration',
      'VideoOutputConfigurationOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoOutputConfigurationOptions',
      'VideoDecoderConfigurationOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoDecoderConfigurationOptions',
      'H264DecOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\H264DecOptions',
      'JpegDecOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\JpegDecOptions',
      'Mpeg4DecOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Mpeg4DecOptions',
      'VideoDecoderConfigurationOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoDecoderConfigurationOptionsExtension',
      'AudioOutput' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AudioOutput',
      'AudioOutputConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AudioOutputConfiguration',
      'AudioOutputConfigurationOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AudioOutputConfigurationOptions',
      'AudioDecoderConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AudioDecoderConfiguration',
      'AudioDecoderConfigurationOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AudioDecoderConfigurationOptions',
      'G711DecOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\G711DecOptions',
      'AACDecOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AACDecOptions',
      'G726DecOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\G726DecOptions',
      'AudioDecoderConfigurationOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AudioDecoderConfigurationOptionsExtension',
      'MulticastConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MulticastConfiguration',
      'StreamSetup' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\StreamSetup',
      'Transport' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Transport',
      'MediaUri' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MediaUri',
      'Scope' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Scope',
      'NetworkInterface' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkInterface',
      'NetworkInterfaceExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkInterfaceExtension',
      'Dot3Configuration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Dot3Configuration',
      'NetworkInterfaceExtension2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkInterfaceExtension2',
      'NetworkInterfaceLink' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkInterfaceLink',
      'NetworkInterfaceConnectionSetting' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkInterfaceConnectionSetting',
      'NetworkInterfaceInfo' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkInterfaceInfo',
      'IPv6NetworkInterface' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IPv6NetworkInterface',
      'IPv4NetworkInterface' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IPv4NetworkInterface',
      'IPv4Configuration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IPv4Configuration',
      'IPv6Configuration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IPv6Configuration',
      'IPv6ConfigurationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IPv6ConfigurationExtension',
      'NetworkProtocol' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkProtocol',
      'NetworkProtocolExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkProtocolExtension',
      'NetworkHost' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkHost',
      'NetworkHostExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkHostExtension',
      'IPAddress' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IPAddress',
      'PrefixedIPv4Address' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PrefixedIPv4Address',
      'PrefixedIPv6Address' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PrefixedIPv6Address',
      'HostnameInformation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\HostnameInformation',
      'HostnameInformationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\HostnameInformationExtension',
      'DNSInformation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DNSInformation',
      'DNSInformationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DNSInformationExtension',
      'NTPInformation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NTPInformation',
      'NTPInformationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NTPInformationExtension',
      'DynamicDNSInformation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DynamicDNSInformation',
      'DynamicDNSInformationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DynamicDNSInformationExtension',
      'NetworkInterfaceSetConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkInterfaceSetConfiguration',
      'NetworkInterfaceSetConfigurationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkInterfaceSetConfigurationExtension',
      'IPv6NetworkInterfaceSetConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IPv6NetworkInterfaceSetConfiguration',
      'IPv4NetworkInterfaceSetConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IPv4NetworkInterfaceSetConfiguration',
      'NetworkGateway' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkGateway',
      'NetworkZeroConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkZeroConfiguration',
      'NetworkZeroConfigurationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkZeroConfigurationExtension',
      'NetworkZeroConfigurationExtension2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkZeroConfigurationExtension2',
      'IPAddressFilter' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IPAddressFilter',
      'IPAddressFilterExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IPAddressFilterExtension',
      'Dot11Configuration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Dot11Configuration',
      'Dot11SecurityConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Dot11SecurityConfiguration',
      'Dot11SecurityConfigurationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Dot11SecurityConfigurationExtension',
      'Dot11PSKSet' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Dot11PSKSet',
      'Dot11PSKSetExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Dot11PSKSetExtension',
      'NetworkInterfaceSetConfigurationExtension2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkInterfaceSetConfigurationExtension2',
      'Dot11Capabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Dot11Capabilities',
      'Dot11Status' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Dot11Status',
      'Dot11AvailableNetworks' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Dot11AvailableNetworks',
      'Dot11AvailableNetworksExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Dot11AvailableNetworksExtension',
      'Capabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Capabilities',
      'CapabilitiesExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CapabilitiesExtension',
      'CapabilitiesExtension2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CapabilitiesExtension2',
      'AnalyticsCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AnalyticsCapabilities',
      'DeviceCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DeviceCapabilities',
      'DeviceCapabilitiesExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DeviceCapabilitiesExtension',
      'EventCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\EventCapabilities',
      'IOCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IOCapabilities',
      'IOCapabilitiesExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IOCapabilitiesExtension',
      'IOCapabilitiesExtension2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IOCapabilitiesExtension2',
      'MediaCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MediaCapabilities',
      'MediaCapabilitiesExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MediaCapabilitiesExtension',
      'RealTimeStreamingCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RealTimeStreamingCapabilities',
      'RealTimeStreamingCapabilitiesExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RealTimeStreamingCapabilitiesExtension',
      'ProfileCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ProfileCapabilities',
      'NetworkCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkCapabilities',
      'NetworkCapabilitiesExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkCapabilitiesExtension',
      'NetworkCapabilitiesExtension2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NetworkCapabilitiesExtension2',
      'SecurityCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SecurityCapabilities',
      'SecurityCapabilitiesExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SecurityCapabilitiesExtension',
      'SecurityCapabilitiesExtension2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SecurityCapabilitiesExtension2',
      'SystemCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SystemCapabilities',
      'SystemCapabilitiesExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SystemCapabilitiesExtension',
      'SystemCapabilitiesExtension2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SystemCapabilitiesExtension2',
      'OnvifVersion' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\OnvifVersion',
      'ImagingCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImagingCapabilities',
      'PTZCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZCapabilities',
      'DeviceIOCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DeviceIOCapabilities',
      'DisplayCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DisplayCapabilities',
      'RecordingCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RecordingCapabilities',
      'SearchCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SearchCapabilities',
      'ReplayCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ReplayCapabilities',
      'ReceiverCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ReceiverCapabilities',
      'AnalyticsDeviceCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AnalyticsDeviceCapabilities',
      'AnalyticsDeviceExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AnalyticsDeviceExtension',
      'SystemLog' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SystemLog',
      'SupportInformation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SupportInformation',
      'BinaryData' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\BinaryData',
      'AttachmentData' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AttachmentData',
      'BackupFile' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\BackupFile',
      'SystemLogUriList' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SystemLogUriList',
      'SystemLogUri' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SystemLogUri',
      'SystemDateTime' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SystemDateTime',
      'SystemDateTimeExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SystemDateTimeExtension',
      'DateTime' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DateTime',
      'Date' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Date',
      'Time' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Time',
      'TimeZone' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\TimeZone',
      'RemoteUser' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RemoteUser',
      'User' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\User',
      'UserExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\UserExtension',
      'CertificateGenerationParameters' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CertificateGenerationParameters',
      'CertificateGenerationParametersExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CertificateGenerationParametersExtension',
      'Certificate' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Certificate',
      'CertificateStatus' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CertificateStatus',
      'CertificateWithPrivateKey' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CertificateWithPrivateKey',
      'CertificateInformation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CertificateInformation',
      'CertificateUsage' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CertificateUsage',
      'CertificateInformationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CertificateInformationExtension',
      'Dot1XConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Dot1XConfiguration',
      'Dot1XConfigurationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Dot1XConfigurationExtension',
      'EAPMethodConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\EAPMethodConfiguration',
      'EapMethodExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\EapMethodExtension',
      'TLSConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\TLSConfiguration',
      'GenericEapPwdConfigurationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GenericEapPwdConfigurationExtension',
      'RelayOutputSettings' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RelayOutputSettings',
      'RelayOutput' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RelayOutput',
      'DigitalInput' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DigitalInput',
      'PTZNode' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZNode',
      'PTZNodeExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZNodeExtension',
      'PTZNodeExtension2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZNodeExtension2',
      'PTZPresetTourSupported' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZPresetTourSupported',
      'PTZPresetTourSupportedExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZPresetTourSupportedExtension',
      'PTZConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZConfiguration',
      'PTZConfigurationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZConfigurationExtension',
      'PTZConfigurationExtension2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZConfigurationExtension2',
      'PTControlDirection' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTControlDirection',
      'PTControlDirectionExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTControlDirectionExtension',
      'EFlip' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\EFlip',
      'Reverse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Reverse',
      'PTZConfigurationOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZConfigurationOptions',
      'PTZConfigurationOptions2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZConfigurationOptions2',
      'PTControlDirectionOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTControlDirectionOptions',
      'PTControlDirectionOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTControlDirectionOptionsExtension',
      'EFlipOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\EFlipOptions',
      'EFlipOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\EFlipOptionsExtension',
      'ReverseOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ReverseOptions',
      'ReverseOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ReverseOptionsExtension',
      'PanTiltLimits' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PanTiltLimits',
      'ZoomLimits' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ZoomLimits',
      'PTZSpaces' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZSpaces',
      'PTZSpacesExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZSpacesExtension',
      'Space2DDescription' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Space2DDescription',
      'Space1DDescription' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Space1DDescription',
      'PTZSpeed' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZSpeed',
      'PTZPreset' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZPreset',
      'PresetTour' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PresetTour',
      'PTZPresetTourExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZPresetTourExtension',
      'PTZPresetTourSpot' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZPresetTourSpot',
      'PTZPresetTourSpotExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZPresetTourSpotExtension',
      'PTZPresetTourPresetDetail' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZPresetTourPresetDetail',
      'PTZPresetTourTypeExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZPresetTourTypeExtension',
      'PTZPresetTourStatus' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZPresetTourStatus',
      'PTZPresetTourStatusExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZPresetTourStatusExtension',
      'PTZPresetTourStartingCondition' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZPresetTourStartingCondition',
      'PTZPresetTourStartingConditionExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZPresetTourStartingConditionExtension',
      'PTZPresetTourOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZPresetTourOptions',
      'PTZPresetTourSpotOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZPresetTourSpotOptions',
      'PTZPresetTourPresetDetailOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZPresetTourPresetDetailOptions',
      'PTZPresetTourPresetDetailOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZPresetTourPresetDetailOptionsExtension',
      'PTZPresetTourStartingConditionOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZPresetTourStartingConditionOptions',
      'PTZPresetTourStartingConditionOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZPresetTourStartingConditionOptionsExtension',
      'ImagingStatus' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImagingStatus',
      'FocusStatus' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FocusStatus',
      'FocusConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FocusConfiguration',
      'ImagingSettings' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImagingSettings',
      'ImagingSettingsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImagingSettingsExtension',
      'Exposure' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Exposure',
      'WideDynamicRange' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\WideDynamicRange',
      'BacklightCompensation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\BacklightCompensation',
      'ImagingOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImagingOptions',
      'WideDynamicRangeOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\WideDynamicRangeOptions',
      'BacklightCompensationOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\BacklightCompensationOptions',
      'FocusOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FocusOptions',
      'ExposureOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ExposureOptions',
      'WhiteBalanceOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\WhiteBalanceOptions',
      'FocusMove' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FocusMove',
      'AbsoluteFocus' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AbsoluteFocus',
      'RelativeFocus' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RelativeFocus',
      'ContinuousFocus' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ContinuousFocus',
      'MoveOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MoveOptions',
      'AbsoluteFocusOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AbsoluteFocusOptions',
      'RelativeFocusOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RelativeFocusOptions',
      'ContinuousFocusOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ContinuousFocusOptions',
      'WhiteBalance' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\WhiteBalance',
      'ImagingStatus20' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImagingStatus20',
      'ImagingStatus20Extension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImagingStatus20Extension',
      'FocusStatus20' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FocusStatus20',
      'FocusStatus20Extension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FocusStatus20Extension',
      'ImagingSettings20' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImagingSettings20',
      'ImagingSettingsExtension20' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImagingSettingsExtension20',
      'ImagingSettingsExtension202' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImagingSettingsExtension202',
      'ImagingSettingsExtension203' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImagingSettingsExtension203',
      'ImagingSettingsExtension204' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImagingSettingsExtension204',
      'ImageStabilization' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImageStabilization',
      'ImageStabilizationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImageStabilizationExtension',
      'IrCutFilterAutoAdjustment' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IrCutFilterAutoAdjustment',
      'IrCutFilterAutoAdjustmentExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IrCutFilterAutoAdjustmentExtension',
      'WideDynamicRange20' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\WideDynamicRange20',
      'BacklightCompensation20' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\BacklightCompensation20',
      'Exposure20' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Exposure20',
      'ToneCompensation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ToneCompensation',
      'ToneCompensationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ToneCompensationExtension',
      'Defogging' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Defogging',
      'DefoggingExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DefoggingExtension',
      'NoiseReduction' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NoiseReduction',
      'ImagingOptions20' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImagingOptions20',
      'ImagingOptions20Extension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImagingOptions20Extension',
      'ImagingOptions20Extension2' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImagingOptions20Extension2',
      'ImagingOptions20Extension3' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImagingOptions20Extension3',
      'ImagingOptions20Extension4' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImagingOptions20Extension4',
      'ImageStabilizationOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImageStabilizationOptions',
      'ImageStabilizationOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ImageStabilizationOptionsExtension',
      'IrCutFilterAutoAdjustmentOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IrCutFilterAutoAdjustmentOptions',
      'IrCutFilterAutoAdjustmentOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\IrCutFilterAutoAdjustmentOptionsExtension',
      'WideDynamicRangeOptions20' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\WideDynamicRangeOptions20',
      'BacklightCompensationOptions20' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\BacklightCompensationOptions20',
      'ExposureOptions20' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ExposureOptions20',
      'MoveOptions20' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MoveOptions20',
      'RelativeFocusOptions20' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RelativeFocusOptions20',
      'WhiteBalance20' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\WhiteBalance20',
      'WhiteBalance20Extension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\WhiteBalance20Extension',
      'FocusConfiguration20' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FocusConfiguration20',
      'FocusConfiguration20Extension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FocusConfiguration20Extension',
      'WhiteBalanceOptions20' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\WhiteBalanceOptions20',
      'WhiteBalanceOptions20Extension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\WhiteBalanceOptions20Extension',
      'FocusOptions20' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FocusOptions20',
      'FocusOptions20Extension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FocusOptions20Extension',
      'ToneCompensationOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ToneCompensationOptions',
      'DefoggingOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DefoggingOptions',
      'NoiseReductionOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\NoiseReductionOptions',
      'MessageExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MessageExtension',
      'ItemList' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ItemList',
      'SimpleItem' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SimpleItem',
      'ElementItem' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ElementItem',
      'ItemListExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ItemListExtension',
      'MessageDescription' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MessageDescription',
      'MessageDescriptionExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MessageDescriptionExtension',
      'ItemListDescription' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ItemListDescription',
      'SimpleItemDescription' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SimpleItemDescription',
      'ElementItemDescription' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ElementItemDescription',
      'ItemListDescriptionExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ItemListDescriptionExtension',
      'Polyline' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Polyline',
      'AnalyticsEngineConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AnalyticsEngineConfiguration',
      'AnalyticsEngineConfigurationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AnalyticsEngineConfigurationExtension',
      'RuleEngineConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RuleEngineConfiguration',
      'RuleEngineConfigurationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RuleEngineConfigurationExtension',
      'Config' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Config',
      'ConfigDescription' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ConfigDescription',
      'Messages' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Messages',
      'ConfigDescriptionExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ConfigDescriptionExtension',
      'SupportedRules' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SupportedRules',
      'SupportedRulesExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SupportedRulesExtension',
      'SupportedAnalyticsModules' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SupportedAnalyticsModules',
      'SupportedAnalyticsModulesExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SupportedAnalyticsModulesExtension',
      'PolylineArray' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PolylineArray',
      'PolylineArrayExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PolylineArrayExtension',
      'PolylineArrayConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PolylineArrayConfiguration',
      'MotionExpression' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MotionExpression',
      'MotionExpressionConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MotionExpressionConfiguration',
      'CellLayout' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CellLayout',
      'PaneConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PaneConfiguration',
      'PaneLayout' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PaneLayout',
      'Layout' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Layout',
      'LayoutExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\LayoutExtension',
      'CodingCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CodingCapabilities',
      'LayoutOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\LayoutOptions',
      'LayoutOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\LayoutOptionsExtension',
      'PaneLayoutOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PaneLayoutOptions',
      'PaneOptionExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PaneOptionExtension',
      'Receiver' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Receiver',
      'ReceiverConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ReceiverConfiguration',
      'ReceiverStateInformation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ReceiverStateInformation',
      'SourceReference' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SourceReference',
      'DateTimeRange' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DateTimeRange',
      'RecordingSummary' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RecordingSummary',
      'SearchScope' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SearchScope',
      'SearchScopeExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SearchScopeExtension',
      'EventFilter' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\EventFilter',
      'PTZPositionFilter' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PTZPositionFilter',
      'MetadataFilter' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MetadataFilter',
      'FindRecordingResultList' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FindRecordingResultList',
      'FindEventResultList' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FindEventResultList',
      'FindEventResult' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FindEventResult',
      'FindPTZPositionResultList' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FindPTZPositionResultList',
      'FindPTZPositionResult' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FindPTZPositionResult',
      'FindMetadataResultList' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FindMetadataResultList',
      'FindMetadataResult' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FindMetadataResult',
      'RecordingInformation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RecordingInformation',
      'RecordingSourceInformation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RecordingSourceInformation',
      'TrackInformation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\TrackInformation',
      'MediaAttributes' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MediaAttributes',
      'TrackAttributes' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\TrackAttributes',
      'TrackAttributesExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\TrackAttributesExtension',
      'VideoAttributes' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\VideoAttributes',
      'AudioAttributes' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AudioAttributes',
      'MetadataAttributes' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MetadataAttributes',
      'RecordingConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RecordingConfiguration',
      'TrackConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\TrackConfiguration',
      'GetRecordingsResponseItem' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetRecordingsResponseItem',
      'GetTracksResponseList' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetTracksResponseList',
      'GetTracksResponseItem' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetTracksResponseItem',
      'RecordingJobConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RecordingJobConfiguration',
      'RecordingJobConfigurationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RecordingJobConfigurationExtension',
      'RecordingJobSource' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RecordingJobSource',
      'RecordingJobSourceExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RecordingJobSourceExtension',
      'RecordingJobTrack' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RecordingJobTrack',
      'RecordingJobStateInformation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RecordingJobStateInformation',
      'RecordingJobStateInformationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RecordingJobStateInformationExtension',
      'RecordingJobStateSource' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RecordingJobStateSource',
      'RecordingJobStateTracks' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RecordingJobStateTracks',
      'RecordingJobStateTrack' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RecordingJobStateTrack',
      'GetRecordingJobsResponseItem' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetRecordingJobsResponseItem',
      'ReplayConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ReplayConfiguration',
      'AnalyticsEngine' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AnalyticsEngine',
      'AnalyticsDeviceEngineConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AnalyticsDeviceEngineConfiguration',
      'AnalyticsDeviceEngineConfigurationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AnalyticsDeviceEngineConfigurationExtension',
      'EngineConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\EngineConfiguration',
      'AnalyticsEngineInputInfo' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AnalyticsEngineInputInfo',
      'AnalyticsEngineInputInfoExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AnalyticsEngineInputInfoExtension',
      'AnalyticsEngineInput' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AnalyticsEngineInput',
      'SourceIdentification' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SourceIdentification',
      'SourceIdentificationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SourceIdentificationExtension',
      'MetadataInput' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MetadataInput',
      'MetadataInputExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MetadataInputExtension',
      'AnalyticsEngineControl' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AnalyticsEngineControl',
      'AnalyticsStateInformation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AnalyticsStateInformation',
      'AnalyticsState' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AnalyticsState',
      'ActionEngineEventPayload' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ActionEngineEventPayload',
      'ActionEngineEventPayloadExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ActionEngineEventPayloadExtension',
      'AudioClassCandidate' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AudioClassCandidate',
      'AudioClassDescriptor' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AudioClassDescriptor',
      'AudioClassDescriptorExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AudioClassDescriptorExtension',
      'ActiveConnection' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ActiveConnection',
      'ProfileStatus' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ProfileStatus',
      'ProfileStatusExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ProfileStatusExtension',
      'OSDReference' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\OSDReference',
      'OSDPosConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\OSDPosConfiguration',
      'OSDPosConfigurationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\OSDPosConfigurationExtension',
      'OSDColor' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\OSDColor',
      'OSDTextConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\OSDTextConfiguration',
      'OSDTextConfigurationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\OSDTextConfigurationExtension',
      'OSDImgConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\OSDImgConfiguration',
      'OSDImgConfigurationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\OSDImgConfigurationExtension',
      'ColorspaceRange' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ColorspaceRange',
      'ColorOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ColorOptions',
      'OSDColorOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\OSDColorOptions',
      'OSDColorOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\OSDColorOptionsExtension',
      'OSDTextOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\OSDTextOptions',
      'OSDTextOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\OSDTextOptionsExtension',
      'OSDImgOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\OSDImgOptions',
      'OSDImgOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\OSDImgOptionsExtension',
      'OSDConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\OSDConfiguration',
      'OSDConfigurationExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\OSDConfigurationExtension',
      'MaximumNumberOfOSDs' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MaximumNumberOfOSDs',
      'OSDConfigurationOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\OSDConfigurationOptions',
      'OSDConfigurationOptionsExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\OSDConfigurationOptionsExtension',
      'FileProgress' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\FileProgress',
      'ArrayOfFileProgress' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ArrayOfFileProgress',
      'ArrayOfFileProgressExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ArrayOfFileProgressExtension',
      'StorageReferencePath' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\StorageReferencePath',
      'StorageReferencePathExtension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\StorageReferencePathExtension',
      'PolygonOptions' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\PolygonOptions',
      'GetServices' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetServices',
      'GetServicesResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetServicesResponse',
      'Service' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Service',
      'GetServiceCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetServiceCapabilities',
      'GetServiceCapabilitiesResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetServiceCapabilitiesResponse',
      'DeviceServiceCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DeviceServiceCapabilities',
      'MiscCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\MiscCapabilities',
      'GetDeviceInformation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetDeviceInformation',
      'GetDeviceInformationResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetDeviceInformationResponse',
      'SetSystemDateAndTime' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetSystemDateAndTime',
      'SetSystemDateAndTimeResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetSystemDateAndTimeResponse',
      'GetSystemDateAndTime' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetSystemDateAndTime',
      'GetSystemDateAndTimeResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetSystemDateAndTimeResponse',
      'SetSystemFactoryDefault' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetSystemFactoryDefault',
      'SetSystemFactoryDefaultResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetSystemFactoryDefaultResponse',
      'UpgradeSystemFirmware' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\UpgradeSystemFirmware',
      'UpgradeSystemFirmwareResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\UpgradeSystemFirmwareResponse',
      'SystemReboot' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SystemReboot',
      'SystemRebootResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SystemRebootResponse',
      'RestoreSystem' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RestoreSystem',
      'RestoreSystemResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RestoreSystemResponse',
      'GetSystemBackup' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetSystemBackup',
      'GetSystemBackupResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetSystemBackupResponse',
      'GetSystemSupportInformation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetSystemSupportInformation',
      'GetSystemSupportInformationResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetSystemSupportInformationResponse',
      'GetSystemLog' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetSystemLog',
      'GetSystemLogResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetSystemLogResponse',
      'GetScopes' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetScopes',
      'GetScopesResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetScopesResponse',
      'SetScopes' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetScopes',
      'SetScopesResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetScopesResponse',
      'AddScopes' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AddScopes',
      'AddScopesResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AddScopesResponse',
      'RemoveScopes' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RemoveScopes',
      'RemoveScopesResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RemoveScopesResponse',
      'GetDiscoveryMode' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetDiscoveryMode',
      'GetDiscoveryModeResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetDiscoveryModeResponse',
      'SetDiscoveryMode' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetDiscoveryMode',
      'SetDiscoveryModeResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetDiscoveryModeResponse',
      'GetRemoteDiscoveryMode' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetRemoteDiscoveryMode',
      'GetRemoteDiscoveryModeResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetRemoteDiscoveryModeResponse',
      'SetRemoteDiscoveryMode' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetRemoteDiscoveryMode',
      'SetRemoteDiscoveryModeResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetRemoteDiscoveryModeResponse',
      'GetDPAddresses' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetDPAddresses',
      'GetDPAddressesResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetDPAddressesResponse',
      'SetDPAddresses' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetDPAddresses',
      'SetDPAddressesResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetDPAddressesResponse',
      'GetEndpointReference' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetEndpointReference',
      'GetEndpointReferenceResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetEndpointReferenceResponse',
      'GetRemoteUser' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetRemoteUser',
      'GetRemoteUserResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetRemoteUserResponse',
      'SetRemoteUser' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetRemoteUser',
      'SetRemoteUserResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetRemoteUserResponse',
      'GetUsers' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetUsers',
      'GetUsersResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetUsersResponse',
      'CreateUsers' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CreateUsers',
      'CreateUsersResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CreateUsersResponse',
      'DeleteUsers' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DeleteUsers',
      'DeleteUsersResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DeleteUsersResponse',
      'SetUser' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetUser',
      'SetUserResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetUserResponse',
      'GetWsdlUrl' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetWsdlUrl',
      'GetWsdlUrlResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetWsdlUrlResponse',
      'GetCapabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetCapabilities',
      'GetCapabilitiesResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetCapabilitiesResponse',
      'GetHostname' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetHostname',
      'GetHostnameResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetHostnameResponse',
      'SetHostname' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetHostname',
      'SetHostnameResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetHostnameResponse',
      'SetHostnameFromDHCP' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetHostnameFromDHCP',
      'SetHostnameFromDHCPResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetHostnameFromDHCPResponse',
      'GetDNS' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetDNS',
      'GetDNSResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetDNSResponse',
      'SetDNS' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetDNS',
      'SetDNSResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetDNSResponse',
      'GetNTP' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetNTP',
      'GetNTPResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetNTPResponse',
      'SetNTP' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetNTP',
      'SetNTPResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetNTPResponse',
      'GetDynamicDNS' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetDynamicDNS',
      'GetDynamicDNSResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetDynamicDNSResponse',
      'SetDynamicDNS' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetDynamicDNS',
      'SetDynamicDNSResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetDynamicDNSResponse',
      'GetNetworkInterfaces' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetNetworkInterfaces',
      'GetNetworkInterfacesResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetNetworkInterfacesResponse',
      'SetNetworkInterfaces' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetNetworkInterfaces',
      'SetNetworkInterfacesResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetNetworkInterfacesResponse',
      'GetNetworkProtocols' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetNetworkProtocols',
      'GetNetworkProtocolsResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetNetworkProtocolsResponse',
      'SetNetworkProtocols' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetNetworkProtocols',
      'SetNetworkProtocolsResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetNetworkProtocolsResponse',
      'GetNetworkDefaultGateway' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetNetworkDefaultGateway',
      'GetNetworkDefaultGatewayResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetNetworkDefaultGatewayResponse',
      'SetNetworkDefaultGateway' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetNetworkDefaultGateway',
      'SetNetworkDefaultGatewayResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetNetworkDefaultGatewayResponse',
      'GetZeroConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetZeroConfiguration',
      'GetZeroConfigurationResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetZeroConfigurationResponse',
      'SetZeroConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetZeroConfiguration',
      'SetZeroConfigurationResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetZeroConfigurationResponse',
      'GetIPAddressFilter' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetIPAddressFilter',
      'GetIPAddressFilterResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetIPAddressFilterResponse',
      'SetIPAddressFilter' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetIPAddressFilter',
      'SetIPAddressFilterResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetIPAddressFilterResponse',
      'AddIPAddressFilter' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AddIPAddressFilter',
      'AddIPAddressFilterResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\AddIPAddressFilterResponse',
      'RemoveIPAddressFilter' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RemoveIPAddressFilter',
      'RemoveIPAddressFilterResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\RemoveIPAddressFilterResponse',
      'GetAccessPolicy' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetAccessPolicy',
      'GetAccessPolicyResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetAccessPolicyResponse',
      'SetAccessPolicy' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetAccessPolicy',
      'SetAccessPolicyResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetAccessPolicyResponse',
      'CreateCertificate' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CreateCertificate',
      'CreateCertificateResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CreateCertificateResponse',
      'GetCertificates' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetCertificates',
      'GetCertificatesResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetCertificatesResponse',
      'GetCertificatesStatus' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetCertificatesStatus',
      'GetCertificatesStatusResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetCertificatesStatusResponse',
      'SetCertificatesStatus' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetCertificatesStatus',
      'SetCertificatesStatusResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetCertificatesStatusResponse',
      'DeleteCertificates' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DeleteCertificates',
      'DeleteCertificatesResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DeleteCertificatesResponse',
      'GetPkcs10Request' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetPkcs10Request',
      'GetPkcs10RequestResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetPkcs10RequestResponse',
      'LoadCertificates' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\LoadCertificates',
      'LoadCertificatesResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\LoadCertificatesResponse',
      'GetClientCertificateMode' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetClientCertificateMode',
      'GetClientCertificateModeResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetClientCertificateModeResponse',
      'SetClientCertificateMode' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetClientCertificateMode',
      'SetClientCertificateModeResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetClientCertificateModeResponse',
      'GetCACertificates' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetCACertificates',
      'GetCACertificatesResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetCACertificatesResponse',
      'LoadCertificateWithPrivateKey' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\LoadCertificateWithPrivateKey',
      'LoadCertificateWithPrivateKeyResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\LoadCertificateWithPrivateKeyResponse',
      'GetCertificateInformation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetCertificateInformation',
      'GetCertificateInformationResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetCertificateInformationResponse',
      'LoadCACertificates' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\LoadCACertificates',
      'LoadCACertificatesResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\LoadCACertificatesResponse',
      'CreateDot1XConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CreateDot1XConfiguration',
      'CreateDot1XConfigurationResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CreateDot1XConfigurationResponse',
      'SetDot1XConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetDot1XConfiguration',
      'SetDot1XConfigurationResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetDot1XConfigurationResponse',
      'GetDot1XConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetDot1XConfiguration',
      'GetDot1XConfigurationResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetDot1XConfigurationResponse',
      'GetDot1XConfigurations' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetDot1XConfigurations',
      'GetDot1XConfigurationsResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetDot1XConfigurationsResponse',
      'DeleteDot1XConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DeleteDot1XConfiguration',
      'DeleteDot1XConfigurationResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DeleteDot1XConfigurationResponse',
      'GetRelayOutputs' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetRelayOutputs',
      'GetRelayOutputsResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetRelayOutputsResponse',
      'SetRelayOutputSettings' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetRelayOutputSettings',
      'SetRelayOutputSettingsResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetRelayOutputSettingsResponse',
      'SetRelayOutputState' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetRelayOutputState',
      'SetRelayOutputStateResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetRelayOutputStateResponse',
      'SendAuxiliaryCommand' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SendAuxiliaryCommand',
      'SendAuxiliaryCommandResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SendAuxiliaryCommandResponse',
      'GetDot11Capabilities' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetDot11Capabilities',
      'GetDot11CapabilitiesResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetDot11CapabilitiesResponse',
      'GetDot11Status' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetDot11Status',
      'GetDot11StatusResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetDot11StatusResponse',
      'ScanAvailableDot11Networks' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ScanAvailableDot11Networks',
      'ScanAvailableDot11NetworksResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\ScanAvailableDot11NetworksResponse',
      'GetSystemUris' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetSystemUris',
      'GetSystemUrisResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetSystemUrisResponse',
      'Extension' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\Extension',
      'StartFirmwareUpgrade' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\StartFirmwareUpgrade',
      'StartFirmwareUpgradeResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\StartFirmwareUpgradeResponse',
      'StartSystemRestore' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\StartSystemRestore',
      'StartSystemRestoreResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\StartSystemRestoreResponse',
      'UserCredential' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\UserCredential',
      'StorageConfigurationData' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\StorageConfigurationData',
      'StorageConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\StorageConfiguration',
      'GetStorageConfigurations' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetStorageConfigurations',
      'GetStorageConfigurationsResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetStorageConfigurationsResponse',
      'CreateStorageConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CreateStorageConfiguration',
      'CreateStorageConfigurationResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\CreateStorageConfigurationResponse',
      'GetStorageConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetStorageConfiguration',
      'GetStorageConfigurationResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetStorageConfigurationResponse',
      'SetStorageConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetStorageConfiguration',
      'SetStorageConfigurationResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetStorageConfigurationResponse',
      'DeleteStorageConfiguration' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DeleteStorageConfiguration',
      'DeleteStorageConfigurationResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DeleteStorageConfigurationResponse',
      'GetGeoLocation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetGeoLocation',
      'GetGeoLocationResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\GetGeoLocationResponse',
      'SetGeoLocation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetGeoLocation',
      'SetGeoLocationResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\SetGeoLocationResponse',
      'DeleteGeoLocation' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DeleteGeoLocation',
      'DeleteGeoLocationResponse' => 'app\\modules\\dvr\\components\\onvif\\wsdl\\DeleteGeoLocationResponse',
    );

//    /**
//     * @param array $options A array of config values
//     * @param string $wsdl The wsdl file to use
//     */
//    public function __construct(array $options = array(), $wsdl = null)
//    {
//      foreach (self::$classmap as $key => $value) {
//        if (!isset($options['classmap'][$key])) {
//          $options['classmap'][$key] = $value;
//        }
//      }
//      $options = array_merge(array (
//      'features' => 1,
//    ), $options);
//      if (!$wsdl) {
//        $wsdl = '/var/www/html/basic/modules/dvr/components/onvif/devicemgmt.wsdl';
//      }
//      parent::__construct($wsdl, $options);
//    }

    /**
     * Returns information about services on the device.
     *
     * @param GetServices $parameters
     * @return GetServicesResponse
     */
    public function GetServices(GetServices $parameters)
    {
      return $this->__soapCall('GetServices', array($parameters));
    }

    /**
     * Returns the capabilities of the device service. The result is returned in a typed answer.
     *
     * @param GetServiceCapabilities $parameters
     * @return GetServiceCapabilitiesResponse
     */
    public function GetServiceCapabilities(GetServiceCapabilities $parameters)
    {
      return $this->__soapCall('GetServiceCapabilities', array($parameters));
    }

    /**
     * This operation gets basic device information from the device.
     *
     * @param GetDeviceInformation $parameters
     * @return GetDeviceInformationResponse
     */
    public function GetDeviceInformation(GetDeviceInformation $parameters)
    {
      return $this->__soapCall('GetDeviceInformation', array($parameters));
    }

    /**
     * This operation sets the device system date and time. The device shall support the
     *                 configuration of the daylight saving setting and of the manual system date and time (if
     *                 applicable) or indication of NTP time (if applicable) through the SetSystemDateAndTime
     *                 command.
     *                 If system time and date are set manually, the client shall include UTCDateTime in the request.
     *                 A TimeZone token which is not formed according to the rules of IEEE 1003.1 section 8.3 is considered as invalid timezone.
     *                 The DayLightSavings flag should be set to true to activate any DST settings of the TimeZone string.
     *                 Clear the DayLightSavings flag if the DST portion of the TimeZone settings should be ignored.
     *
     * @param SetSystemDateAndTime $parameters
     * @return SetSystemDateAndTimeResponse
     */
    public function SetSystemDateAndTime(SetSystemDateAndTime $parameters)
    {
      return $this->__soapCall('SetSystemDateAndTime', array($parameters));
    }

    /**
     * This operation gets the device system date and time. The device shall support the return of
     *                 the daylight saving setting and of the manual system date and time (if applicable) or indication
     *                 of NTP time (if applicable) through the GetSystemDateAndTime command.
     *                 A device shall provide the UTCDateTime information.
     *
     * @param GetSystemDateAndTime $parameters
     * @return GetSystemDateAndTimeResponse
     */
    public function GetSystemDateAndTime(GetSystemDateAndTime $parameters)
    {
      return $this->__soapCall('GetSystemDateAndTime', array($parameters));
    }

    /**
     * This operation reloads the parameters on the device to their factory default values.
     *
     * @param SetSystemFactoryDefault $parameters
     * @return SetSystemFactoryDefaultResponse
     */
    public function SetSystemFactoryDefault(SetSystemFactoryDefault $parameters)
    {
      return $this->__soapCall('SetSystemFactoryDefault', array($parameters));
    }

    /**
     * This operation upgrades a device firmware version. After a successful upgrade the response
     *                 message is sent before the device reboots. The device should support firmware upgrade
     *                 through the UpgradeSystemFirmware command. The exact format of the firmware data is
     *                 outside the scope of this standard.
     *
     * @param UpgradeSystemFirmware $parameters
     * @return UpgradeSystemFirmwareResponse
     */
    public function UpgradeSystemFirmware(UpgradeSystemFirmware $parameters)
    {
      return $this->__soapCall('UpgradeSystemFirmware', array($parameters));
    }

    /**
     * This operation reboots the device.
     *
     * @param SystemReboot $parameters
     * @return SystemRebootResponse
     */
    public function SystemReboot(SystemReboot $parameters)
    {
      return $this->__soapCall('SystemReboot', array($parameters));
    }

    /**
     * This operation restores the system backup configuration files(s) previously retrieved from a
     *                 device. The device should support restore of backup configuration file(s) through the
     *                 RestoreSystem command. The exact format of the backup configuration file(s) is outside the
     *                 scope of this standard. If the command is supported, it shall accept backup files returned by
     *                 the GetSystemBackup command.
     *
     * @param RestoreSystem $parameters
     * @return RestoreSystemResponse
     */
    public function RestoreSystem(RestoreSystem $parameters)
    {
      return $this->__soapCall('RestoreSystem', array($parameters));
    }

    /**
     * This operation is retrieves system backup configuration file(s) from a device. The device
     *                 should support return of back up configuration file(s) through the GetSystemBackup command.
     *                 The backup is returned with reference to a name and mime-type together with binary data.
     *                 The exact format of the backup configuration files is outside the scope of this standard.
     *
     * @param GetSystemBackup $parameters
     * @return GetSystemBackupResponse
     */
    public function GetSystemBackup(GetSystemBackup $parameters)
    {
      return $this->__soapCall('GetSystemBackup', array($parameters));
    }

    /**
     * This operation gets a system log from the device. The exact format of the system logs is outside the scope of this standard.
     *
     * @param GetSystemLog $parameters
     * @return GetSystemLogResponse
     */
    public function GetSystemLog(GetSystemLog $parameters)
    {
      return $this->__soapCall('GetSystemLog', array($parameters));
    }

    /**
     * This operation gets arbitary device diagnostics information from the device.
     *
     * @param GetSystemSupportInformation $parameters
     * @return GetSystemSupportInformationResponse
     */
    public function GetSystemSupportInformation(GetSystemSupportInformation $parameters)
    {
      return $this->__soapCall('GetSystemSupportInformation', array($parameters));
    }

    /**
     * This operation requests the scope parameters of a device. The scope parameters are used in
     *                 the device discovery to match a probe message, see Section 7. The Scope parameters are of
     *                 two different types:
     *                     Fixed
     *                     Configurable
     *
     *                 Fixed scope parameters are permanent device characteristics and cannot be removed through the device management interface.
     *                 The scope type is indicated in the scope list returned in the get scope parameters response. A device shall support
     *                 retrieval of discovery scope parameters through the GetScopes command. As some scope parameters are mandatory,
     *                 the device shall return a non-empty scope list in the response.
     *
     * @param GetScopes $parameters
     * @return GetScopesResponse
     */
    public function GetScopes(GetScopes $parameters)
    {
      return $this->__soapCall('GetScopes', array($parameters));
    }

    /**
     * This operation sets the scope parameters of a device. The scope parameters are used in the
     *                 device discovery to match a probe message.
     *                 This operation replaces all existing configurable scope parameters (not fixed parameters). If
     *                 this shall be avoided, one should use the scope add command instead. The device shall
     *                 support configuration of discovery scope parameters through the SetScopes command.
     *
     * @param SetScopes $parameters
     * @return SetScopesResponse
     */
    public function SetScopes(SetScopes $parameters)
    {
      return $this->__soapCall('SetScopes', array($parameters));
    }

    /**
     * This operation adds new configurable scope parameters to a device. The scope parameters
     *                 are used in the device discovery to match a probe message. The device shall
     *                 support addition of discovery scope parameters through the AddScopes command.
     *
     * @param AddScopes $parameters
     * @return AddScopesResponse
     */
    public function AddScopes(AddScopes $parameters)
    {
      return $this->__soapCall('AddScopes', array($parameters));
    }

    /**
     * This operation deletes scope-configurable scope parameters from a device. The scope
     *                 parameters are used in the device discovery to match a probe message, see Section 7. The
     *                 device shall support deletion of discovery scope parameters through the RemoveScopes
     *                 command.
     *                 Table
     *
     * @param RemoveScopes $parameters
     * @return RemoveScopesResponse
     */
    public function RemoveScopes(RemoveScopes $parameters)
    {
      return $this->__soapCall('RemoveScopes', array($parameters));
    }

    /**
     * This operation gets the discovery mode of a device. See Section 7.2 for the definition of the
     *                 different device discovery modes. The device shall support retrieval of the discovery mode
     *                 setting through the GetDiscoveryMode command.
     *
     * @param GetDiscoveryMode $parameters
     * @return GetDiscoveryModeResponse
     */
    public function GetDiscoveryMode(GetDiscoveryMode $parameters)
    {
      return $this->__soapCall('GetDiscoveryMode', array($parameters));
    }

    /**
     * This operation sets the discovery mode operation of a device. See Section 7.2 for the
     *                 definition of the different device discovery modes. The device shall support configuration of
     *                 the discovery mode setting through the SetDiscoveryMode command.
     *
     * @param SetDiscoveryMode $parameters
     * @return SetDiscoveryModeResponse
     */
    public function SetDiscoveryMode(SetDiscoveryMode $parameters)
    {
      return $this->__soapCall('SetDiscoveryMode', array($parameters));
    }

    /**
     * This operation gets the remote discovery mode of a device. See Section 7.4 for the definition
     *                 of remote discovery extensions. A device that supports remote discovery shall support
     *                 retrieval of the remote discovery mode setting through the GetRemoteDiscoveryMode
     *                 command.
     *
     * @param GetRemoteDiscoveryMode $parameters
     * @return GetRemoteDiscoveryModeResponse
     */
    public function GetRemoteDiscoveryMode(GetRemoteDiscoveryMode $parameters)
    {
      return $this->__soapCall('GetRemoteDiscoveryMode', array($parameters));
    }

    /**
     * This operation sets the remote discovery mode of operation of a device. See Section 7.4 for
     *                 the definition of remote discovery remote extensions. A device that supports remote discovery
     *                 shall support configuration of the discovery mode setting through the
     *                 SetRemoteDiscoveryMode command.
     *
     * @param SetRemoteDiscoveryMode $parameters
     * @return SetRemoteDiscoveryModeResponse
     */
    public function SetRemoteDiscoveryMode(SetRemoteDiscoveryMode $parameters)
    {
      return $this->__soapCall('SetRemoteDiscoveryMode', array($parameters));
    }

    /**
     * This operation gets the remote DP address or addresses from a device. If the device supports
     *                 remote discovery, as specified in Section 7.4, the device shall support retrieval of the remote
     *                 DP address(es) through the GetDPAddresses command.
     *
     * @param GetDPAddresses $parameters
     * @return GetDPAddressesResponse
     */
    public function GetDPAddresses(GetDPAddresses $parameters)
    {
      return $this->__soapCall('GetDPAddresses', array($parameters));
    }

    /**
     * A client can ask for the device service endpoint reference address property that can be used
     *                 to derive the password equivalent for remote user operation. The device shall support the
     *                 GetEndpointReference command returning the address property of the device service
     *                 endpoint reference.
     *
     * @param GetEndpointReference $parameters
     * @return GetEndpointReferenceResponse
     */
    public function GetEndpointReference(GetEndpointReference $parameters)
    {
      return $this->__soapCall('GetEndpointReference', array($parameters));
    }

    /**
     * This operation returns the configured remote user (if any). A device supporting remote user
     *                 handling shall support this operation. The user is only valid for the WS-UserToken profile or
     *                 as a HTTP / RTSP user.
     *                 The algorithm to use for deriving the password is described in section 5.12.2.1 of the core specification.
     *
     * @param GetRemoteUser $parameters
     * @return GetRemoteUserResponse
     */
    public function GetRemoteUser(GetRemoteUser $parameters)
    {
      return $this->__soapCall('GetRemoteUser', array($parameters));
    }

    /**
     * This operation sets the remote user. A device supporting remote user handling shall support this
     *                 operation. The user is only valid for the WS-UserToken profile or as a HTTP / RTSP user.
     *                 The password that is set shall always be the original (not derived) password.
     *                 If UseDerivedPassword is set password derivation shall be done by the device when connecting to a
     *                 remote device.The algorithm to use for deriving the password is described in section 5.12.2.1 of the core specification.
     *                 To remove the remote user SetRemoteUser should be called without the RemoteUser parameter.
     *
     * @param SetRemoteUser $parameters
     * @return SetRemoteUserResponse
     */
    public function SetRemoteUser(SetRemoteUser $parameters)
    {
      return $this->__soapCall('SetRemoteUser', array($parameters));
    }

    /**
     * This operation lists the registered users and corresponding credentials on a device. The
     *                 device shall support retrieval of registered device users and their credentials for the user
     *                 token through the GetUsers command.
     *
     * @param GetUsers $parameters
     * @return GetUsersResponse
     */
    public function GetUsers(GetUsers $parameters)
    {
      return $this->__soapCall('GetUsers', array($parameters));
    }

    /**
     * This operation creates new device users and corresponding credentials on a device for authentication purposes.
     *                 The device shall support creation of device users and their credentials through the CreateUsers
     *                 command. Either all users are created successfully or a fault message shall be returned
     *                 without creating any user.
     *                 ONVIF compliant devices are recommended to support password length of at least 28 bytes,
     *                 as clients may follow the password derivation mechanism which results in 'password
     *                 equivalent' of length 28 bytes, as described in section 3.1.2 of the ONVIF security white paper.
     *
     * @param CreateUsers $parameters
     * @return CreateUsersResponse
     */
    public function CreateUsers(CreateUsers $parameters)
    {
      return $this->__soapCall('CreateUsers', array($parameters));
    }

    /**
     * This operation deletes users on a device. The device shall support deletion of device users and their credentials
     *                 through the DeleteUsers command. A device may have one or more fixed users
     *                 that cannot be deleted to ensure access to the unit. Either all users are deleted successfully or a
     *                 fault message shall be returned and no users be deleted.
     *
     * @param DeleteUsers $parameters
     * @return DeleteUsersResponse
     */
    public function DeleteUsers(DeleteUsers $parameters)
    {
      return $this->__soapCall('DeleteUsers', array($parameters));
    }

    /**
     * This operation updates the settings for one or several users on a device for authentication purposes.
     *                 The device shall support update of device users and their credentials through the SetUser command.
     *                 Either all change requests are processed successfully or a fault message shall be returned and no change requests be processed.
     *
     * @param SetUser $parameters
     * @return SetUserResponse
     */
    public function SetUser(SetUser $parameters)
    {
      return $this->__soapCall('SetUser', array($parameters));
    }

    /**
     * This method allows to provide a URL where product specific WSDL and schema definitions can be retrieved. This method is deprecated.
     *
     * @param GetWsdlUrl $parameters
     * @return GetWsdlUrlResponse
     */
    public function GetWsdlUrl(GetWsdlUrl $parameters)
    {
      return $this->__soapCall('GetWsdlUrl', array($parameters));
    }

    /**
     * This method has been replaced by the more generic GetServices method.
     *                 For capabilities of individual services refer to the GetServiceCapabilities methods.
     *
     * @param GetCapabilities $parameters
     * @return GetCapabilitiesResponse
     */
    public function GetCapabilities(GetCapabilities $parameters)
    {
      return $this->__soapCall('GetCapabilities', array($parameters));
    }

    /**
     * This operation sets the remote DP address or addresses on a device. If the device supports
     *                 remote discovery, as specified in Section 7.4, the device shall support configuration of the
     *                 remote DP address(es) through the SetDPAddresses command.
     *
     * @param SetDPAddresses $parameters
     * @return SetDPAddressesResponse
     */
    public function SetDPAddresses(SetDPAddresses $parameters)
    {
      return $this->__soapCall('SetDPAddresses', array($parameters));
    }

    /**
     * This operation is used by an endpoint to get the hostname from a device. The device shall
     *                 return its hostname configurations through the GetHostname command.
     *
     * @param GetHostname $parameters
     * @return GetHostnameResponse
     */
    public function GetHostname(GetHostname $parameters)
    {
      return $this->__soapCall('GetHostname', array($parameters));
    }

    /**
     * This operation sets the hostname on a device. It shall be possible to set the device hostname
     *                 configurations through the SetHostname command.
     *                 A device shall accept string formated according to RFC 1123 section 2.1 or alternatively to RFC 952,
     *                 other string shall be considered as invalid strings.
     *
     * @param SetHostname $parameters
     * @return SetHostnameResponse
     */
    public function SetHostname(SetHostname $parameters)
    {
      return $this->__soapCall('SetHostname', array($parameters));
    }

    /**
     * This operation controls whether the hostname is set manually or retrieved via DHCP.
     *
     * @param SetHostnameFromDHCP $parameters
     * @return SetHostnameFromDHCPResponse
     */
    public function SetHostnameFromDHCP(SetHostnameFromDHCP $parameters)
    {
      return $this->__soapCall('SetHostnameFromDHCP', array($parameters));
    }

    /**
     * This operation gets the DNS settings from a device. The device shall return its DNS
     *                 configurations through the GetDNS command.
     *
     * @param GetDNS $parameters
     * @return GetDNSResponse
     */
    public function GetDNS(GetDNS $parameters)
    {
      return $this->__soapCall('GetDNS', array($parameters));
    }

    /**
     * This operation sets the DNS settings on a device. It shall be possible to set the device DNS
     *                 configurations through the SetDNS command.
     *
     * @param SetDNS $parameters
     * @return SetDNSResponse
     */
    public function SetDNS(SetDNS $parameters)
    {
      return $this->__soapCall('SetDNS', array($parameters));
    }

    /**
     * This operation gets the NTP settings from a device. If the device supports NTP, it shall be
     *                 possible to get the NTP server settings through the GetNTP command.
     *
     * @param GetNTP $parameters
     * @return GetNTPResponse
     */
    public function GetNTP(GetNTP $parameters)
    {
      return $this->__soapCall('GetNTP', array($parameters));
    }

    /**
     * This operation sets the NTP settings on a device. If the device supports NTP, it shall be
     *                 possible to set the NTP server settings through the SetNTP command.
     *                 A device shall accept string formated according to RFC 1123 section 2.1 or alternatively to RFC 952,
     *                 other string shall be considered as invalid strings.
     *                 Changes to the NTP server list will not affect the clock mode DateTimeType. Use SetSystemDateAndTime to activate NTP operation.
     *
     * @param SetNTP $parameters
     * @return SetNTPResponse
     */
    public function SetNTP(SetNTP $parameters)
    {
      return $this->__soapCall('SetNTP', array($parameters));
    }

    /**
     * This operation gets the dynamic DNS settings from a device. If the device supports dynamic
     *                 DNS as specified in [RFC 2136] and [RFC 4702], it shall be possible to get the type, name
     *                 and TTL through the GetDynamicDNS command.
     *
     * @param GetDynamicDNS $parameters
     * @return GetDynamicDNSResponse
     */
    public function GetDynamicDNS(GetDynamicDNS $parameters)
    {
      return $this->__soapCall('GetDynamicDNS', array($parameters));
    }

    /**
     * This operation sets the dynamic DNS settings on a device. If the device supports dynamic
     *                 DNS as specified in [RFC 2136] and [RFC 4702], it shall be possible to set the type, name
     *                 and TTL through the SetDynamicDNS command.
     *
     * @param SetDynamicDNS $parameters
     * @return SetDynamicDNSResponse
     */
    public function SetDynamicDNS(SetDynamicDNS $parameters)
    {
      return $this->__soapCall('SetDynamicDNS', array($parameters));
    }

    /**
     * This operation gets the network interface configuration from a device. The device shall
     *                 support return of network interface configuration settings as defined by the NetworkInterface
     *                 type through the GetNetworkInterfaces command.
     *
     * @param GetNetworkInterfaces $parameters
     * @return GetNetworkInterfacesResponse
     */
    public function GetNetworkInterfaces(GetNetworkInterfaces $parameters)
    {
      return $this->__soapCall('GetNetworkInterfaces', array($parameters));
    }

    /**
     * This operation sets the network interface configuration on a device. The device shall support
     *                 network configuration of supported network interfaces through the SetNetworkInterfaces
     *                 command.
     *                 For interoperability with a client unaware of the IEEE 802.11 extension a device shall retain
     *                 its IEEE 802.11 configuration if the IEEE 802.11 configuration element isn’t present in the
     *                 request.
     *
     * @param SetNetworkInterfaces $parameters
     * @return SetNetworkInterfacesResponse
     */
    public function SetNetworkInterfaces(SetNetworkInterfaces $parameters)
    {
      return $this->__soapCall('SetNetworkInterfaces', array($parameters));
    }

    /**
     * This operation gets defined network protocols from a device. The device shall support the
     *                 GetNetworkProtocols command returning configured network protocols.
     *
     * @param GetNetworkProtocols $parameters
     * @return GetNetworkProtocolsResponse
     */
    public function GetNetworkProtocols(GetNetworkProtocols $parameters)
    {
      return $this->__soapCall('GetNetworkProtocols', array($parameters));
    }

    /**
     * This operation configures defined network protocols on a device. The device shall support
     *                 configuration of defined network protocols through the SetNetworkProtocols command.
     *
     * @param SetNetworkProtocols $parameters
     * @return SetNetworkProtocolsResponse
     */
    public function SetNetworkProtocols(SetNetworkProtocols $parameters)
    {
      return $this->__soapCall('SetNetworkProtocols', array($parameters));
    }

    /**
     * This operation gets the default gateway settings from a device. The device shall support the
     *                 GetNetworkDefaultGateway command returning configured default gateway address(es).
     *
     * @param GetNetworkDefaultGateway $parameters
     * @return GetNetworkDefaultGatewayResponse
     */
    public function GetNetworkDefaultGateway(GetNetworkDefaultGateway $parameters)
    {
      return $this->__soapCall('GetNetworkDefaultGateway', array($parameters));
    }

    /**
     * This operation sets the default gateway settings on a device. The device shall support
     *                 configuration of default gateway through the SetNetworkDefaultGateway command.
     *
     * @param SetNetworkDefaultGateway $parameters
     * @return SetNetworkDefaultGatewayResponse
     */
    public function SetNetworkDefaultGateway(SetNetworkDefaultGateway $parameters)
    {
      return $this->__soapCall('SetNetworkDefaultGateway', array($parameters));
    }

    /**
     * This operation gets the zero-configuration from a device. If the device supports dynamic IP
     *                 configuration according to [RFC3927], it shall support the return of IPv4 zero configuration
     *                 address and status through the GetZeroConfiguration command.
     *                 Devices supporting zero configuration on more than one interface shall use the extension to list the additional interface settings.
     *
     * @param GetZeroConfiguration $parameters
     * @return GetZeroConfigurationResponse
     */
    public function GetZeroConfiguration(GetZeroConfiguration $parameters)
    {
      return $this->__soapCall('GetZeroConfiguration', array($parameters));
    }

    /**
     * This operation sets the zero-configuration. Use GetCapalities to get if zero-zero-configuration is supported or not.
     *
     * @param SetZeroConfiguration $parameters
     * @return SetZeroConfigurationResponse
     */
    public function SetZeroConfiguration(SetZeroConfiguration $parameters)
    {
      return $this->__soapCall('SetZeroConfiguration', array($parameters));
    }

    /**
     * This operation gets the IP address filter settings from a device. If the device supports device
     *                 access control based on IP filtering rules (denied or accepted ranges of IP addresses), the
     *                 device shall support the GetIPAddressFilter command.
     *
     * @param GetIPAddressFilter $parameters
     * @return GetIPAddressFilterResponse
     */
    public function GetIPAddressFilter(GetIPAddressFilter $parameters)
    {
      return $this->__soapCall('GetIPAddressFilter', array($parameters));
    }

    /**
     * This operation sets the IP address filter settings on a device. If the device supports device
     *                 access control based on IP filtering rules (denied or accepted ranges of IP addresses), the
     *                 device shall support configuration of IP filtering rules through the SetIPAddressFilter
     *                 command.
     *
     * @param SetIPAddressFilter $parameters
     * @return SetIPAddressFilterResponse
     */
    public function SetIPAddressFilter(SetIPAddressFilter $parameters)
    {
      return $this->__soapCall('SetIPAddressFilter', array($parameters));
    }

    /**
     * This operation adds an IP filter address to a device. If the device supports device access
     *                 control based on IP filtering rules (denied or accepted ranges of IP addresses), the device
     *                 shall support adding of IP filtering addresses through the AddIPAddressFilter command.
     *
     * @param AddIPAddressFilter $parameters
     * @return AddIPAddressFilterResponse
     */
    public function AddIPAddressFilter(AddIPAddressFilter $parameters)
    {
      return $this->__soapCall('AddIPAddressFilter', array($parameters));
    }

    /**
     * This operation deletes an IP filter address from a device. If the device supports device access
     *                 control based on IP filtering rules (denied or accepted ranges of IP addresses), the device
     *                 shall support deletion of IP filtering addresses through the RemoveIPAddressFilter command.
     *
     * @param RemoveIPAddressFilter $parameters
     * @return RemoveIPAddressFilterResponse
     */
    public function RemoveIPAddressFilter(RemoveIPAddressFilter $parameters)
    {
      return $this->__soapCall('RemoveIPAddressFilter', array($parameters));
    }

    /**
     * Access to different services and sub-sets of services should be subject to access control. The
     *                 WS-Security framework gives the prerequisite for end-point authentication. Authorization
     *                 decisions can then be taken using an access security policy. This standard does not mandate
     *                 any particular policy description format or security policy but this is up to the device
     *                 manufacturer or system provider to choose policy and policy description format of choice.
     *                 However, an access policy (in arbitrary format) can be requested using this command. If the
     *                 device supports access policy settings based on WS-Security authentication, then the device
     *                 shall support this command.
     *
     * @param GetAccessPolicy $parameters
     * @return GetAccessPolicyResponse
     */
    public function GetAccessPolicy(GetAccessPolicy $parameters)
    {
      return $this->__soapCall('GetAccessPolicy', array($parameters));
    }

    /**
     * This command sets the device access security policy (for more details on the access security
     *                 policy see the Get command). If the device supports access policy settings
     *                 based on WS-Security authentication, then the device shall support this command.
     *
     * @param SetAccessPolicy $parameters
     * @return SetAccessPolicyResponse
     */
    public function SetAccessPolicy(SetAccessPolicy $parameters)
    {
      return $this->__soapCall('SetAccessPolicy', array($parameters));
    }

    /**
     * @param CreateCertificate $parameters
     * @return CreateCertificateResponse
     */
    public function CreateCertificate(CreateCertificate $parameters)
    {
      return $this->__soapCall('CreateCertificate', array($parameters));
    }

    /**
     * @param GetCertificates $parameters
     * @return GetCertificatesResponse
     */
    public function GetCertificates(GetCertificates $parameters)
    {
      return $this->__soapCall('GetCertificates', array($parameters));
    }

    /**
     * @param GetCertificatesStatus $parameters
     * @return GetCertificatesStatusResponse
     */
    public function GetCertificatesStatus(GetCertificatesStatus $parameters)
    {
      return $this->__soapCall('GetCertificatesStatus', array($parameters));
    }

    /**
     * @param SetCertificatesStatus $parameters
     * @return SetCertificatesStatusResponse
     */
    public function SetCertificatesStatus(SetCertificatesStatus $parameters)
    {
      return $this->__soapCall('SetCertificatesStatus', array($parameters));
    }

    /**
     * @param DeleteCertificates $parameters
     * @return DeleteCertificatesResponse
     */
    public function DeleteCertificates(DeleteCertificates $parameters)
    {
      return $this->__soapCall('DeleteCertificates', array($parameters));
    }

    /**
     * @param GetPkcs10Request $parameters
     * @return GetPkcs10RequestResponse
     */
    public function GetPkcs10Request(GetPkcs10Request $parameters)
    {
      return $this->__soapCall('GetPkcs10Request', array($parameters));
    }

    /**
     * @param LoadCertificates $parameters
     * @return LoadCertificatesResponse
     */
    public function LoadCertificates(LoadCertificates $parameters)
    {
      return $this->__soapCall('LoadCertificates', array($parameters));
    }

    /**
     * @param GetClientCertificateMode $parameters
     * @return GetClientCertificateModeResponse
     */
    public function GetClientCertificateMode(GetClientCertificateMode $parameters)
    {
      return $this->__soapCall('GetClientCertificateMode', array($parameters));
    }

    /**
     * @param SetClientCertificateMode $parameters
     * @return SetClientCertificateModeResponse
     */
    public function SetClientCertificateMode(SetClientCertificateMode $parameters)
    {
      return $this->__soapCall('SetClientCertificateMode', array($parameters));
    }

    /**
     * This operation gets a list of all available relay outputs and their settings.
     *                 This method has been depricated with version 2.0. Refer to the DeviceIO service.
     *
     * @param GetRelayOutputs $parameters
     * @return GetRelayOutputsResponse
     */
    public function GetRelayOutputs(GetRelayOutputs $parameters)
    {
      return $this->__soapCall('GetRelayOutputs', array($parameters));
    }

    /**
     * This operation sets the settings of a relay output.
     *                 This method has been depricated with version 2.0. Refer to the DeviceIO service.
     *
     * @param SetRelayOutputSettings $parameters
     * @return SetRelayOutputSettingsResponse
     */
    public function SetRelayOutputSettings(SetRelayOutputSettings $parameters)
    {
      return $this->__soapCall('SetRelayOutputSettings', array($parameters));
    }

    /**
     * This operation sets the state of a relay output.
     *                 This method has been depricated with version 2.0. Refer to the DeviceIO service.
     *
     * @param SetRelayOutputState $parameters
     * @return SetRelayOutputStateResponse
     */
    public function SetRelayOutputState(SetRelayOutputState $parameters)
    {
      return $this->__soapCall('SetRelayOutputState', array($parameters));
    }

    /**
     * Manage auxiliary commands supported by a device, such as controlling an Infrared (IR) lamp,
     *                 a heater or a wiper or a thermometer that is connected to the device.
     *                 The supported commands can be retrieved via the AuxiliaryCommands capability.
     *                 Although the name of the auxiliary commands can be freely defined, commands starting with the prefix tt: are
     *                 reserved to define frequently used commands and these reserved commands shall all share the "tt:command|parameter" syntax.
     *
     *                     tt:Wiper|On – Request to start the wiper.
     *                     tt:Wiper|Off – Request to stop the wiper.
     *                     tt:Washer|On – Request to start the washer.
     *                     tt:Washer|Off – Request to stop the washer.
     *                     tt:WashingProcedure|On – Request to start the washing procedure.
     *                     tt: WashingProcedure |Off – Request to stop the washing procedure.
     *                     tt:IRLamp|On – Request to turn ON an IR illuminator attached to the unit.
     *                     tt:IRLamp|Off – Request to turn OFF an IR illuminator attached to the unit.
     *                     tt:IRLamp|Auto – Request to configure an IR illuminator attached to the unit so that it automatically turns ON and OFF.
     *
     *                 A device that indicates auxiliary service capability shall support this command.
     *
     * @param SendAuxiliaryCommand $parameters
     * @return SendAuxiliaryCommandResponse
     */
    public function SendAuxiliaryCommand(SendAuxiliaryCommand $parameters)
    {
      return $this->__soapCall('SendAuxiliaryCommand', array($parameters));
    }

    /**
     * @param GetCACertificates $parameters
     * @return GetCACertificatesResponse
     */
    public function GetCACertificates(GetCACertificates $parameters)
    {
      return $this->__soapCall('GetCACertificates', array($parameters));
    }

    /**
     * @param LoadCertificateWithPrivateKey $parameters
     * @return LoadCertificateWithPrivateKeyResponse
     */
    public function LoadCertificateWithPrivateKey(LoadCertificateWithPrivateKey $parameters)
    {
      return $this->__soapCall('LoadCertificateWithPrivateKey', array($parameters));
    }

    /**
     * @param GetCertificateInformation $parameters
     * @return GetCertificateInformationResponse
     */
    public function GetCertificateInformation(GetCertificateInformation $parameters)
    {
      return $this->__soapCall('GetCertificateInformation', array($parameters));
    }

    /**
     * @param LoadCACertificates $parameters
     * @return LoadCACertificatesResponse
     */
    public function LoadCACertificates(LoadCACertificates $parameters)
    {
      return $this->__soapCall('LoadCACertificates', array($parameters));
    }

    /**
     * @param CreateDot1XConfiguration $parameters
     * @return CreateDot1XConfigurationResponse
     */
    public function CreateDot1XConfiguration(CreateDot1XConfiguration $parameters)
    {
      return $this->__soapCall('CreateDot1XConfiguration', array($parameters));
    }

    /**
     * @param SetDot1XConfiguration $parameters
     * @return SetDot1XConfigurationResponse
     */
    public function SetDot1XConfiguration(SetDot1XConfiguration $parameters)
    {
      return $this->__soapCall('SetDot1XConfiguration', array($parameters));
    }

    /**
     * @param GetDot1XConfiguration $parameters
     * @return GetDot1XConfigurationResponse
     */
    public function GetDot1XConfiguration(GetDot1XConfiguration $parameters)
    {
      return $this->__soapCall('GetDot1XConfiguration', array($parameters));
    }

    /**
     * @param GetDot1XConfigurations $parameters
     * @return GetDot1XConfigurationsResponse
     */
    public function GetDot1XConfigurations(GetDot1XConfigurations $parameters)
    {
      return $this->__soapCall('GetDot1XConfigurations', array($parameters));
    }

    /**
     * @param DeleteDot1XConfiguration $parameters
     * @return DeleteDot1XConfigurationResponse
     */
    public function DeleteDot1XConfiguration(DeleteDot1XConfiguration $parameters)
    {
      return $this->__soapCall('DeleteDot1XConfiguration', array($parameters));
    }

    /**
     * This operation returns the IEEE802.11 capabilities. The device shall support
     *                 this operation.
     *
     * @param GetDot11Capabilities $parameters
     * @return GetDot11CapabilitiesResponse
     */
    public function GetDot11Capabilities(GetDot11Capabilities $parameters)
    {
      return $this->__soapCall('GetDot11Capabilities', array($parameters));
    }

    /**
     * This operation returns the status of a wireless network interface. The device shall support this
     *                 command.
     *
     * @param GetDot11Status $parameters
     * @return GetDot11StatusResponse
     */
    public function GetDot11Status(GetDot11Status $parameters)
    {
      return $this->__soapCall('GetDot11Status', array($parameters));
    }

    /**
     * This operation returns a lists of the wireless networks in range of the device. A device should
     *                 support this operation.
     *
     * @param ScanAvailableDot11Networks $parameters
     * @return ScanAvailableDot11NetworksResponse
     */
    public function ScanAvailableDot11Networks(ScanAvailableDot11Networks $parameters)
    {
      return $this->__soapCall('ScanAvailableDot11Networks', array($parameters));
    }

    /**
     * This operation is used to retrieve URIs from which system information may be downloaded
     *                 using HTTP. URIs may be returned for the following system information:
     *                 System Logs. Multiple system logs may be returned, of different types. The exact format of
     *                 the system logs is outside the scope of this specification.
     *                 Support Information. This consists of arbitrary device diagnostics information from a device.
     *                 The exact format of the diagnostic information is outside the scope of this specification.
     *                 System Backup. The received file is a backup file that can be used to restore the current
     *                 device configuration at a later date. The exact format of the backup configuration file is
     *                 outside the scope of this specification.
     *                 If the device allows retrieval of system logs, support information or system backup data, it
     *                 should make them available via HTTP GET. If it does, it shall support the GetSystemUris
     *                 command.
     *
     * @param GetSystemUris $parameters
     * @return GetSystemUrisResponse
     */
    public function GetSystemUris(GetSystemUris $parameters)
    {
      return $this->__soapCall('GetSystemUris', array($parameters));
    }

    /**
     * This operation initiates a firmware upgrade using the HTTP POST mechanism. The response
     *                 to the command includes an HTTP URL to which the upgrade file may be uploaded. The
     *                 actual upgrade takes place as soon as the HTTP POST operation has completed. The device
     *                 should support firmware upgrade through the StartFirmwareUpgrade command. The exact
     *                 format of the firmware data is outside the scope of this specification.
     *                 Firmware upgrade over HTTP may be achieved using the following steps:
     *                     Client calls StartFirmwareUpgrade.
     *                     Server responds with upload URI and optional delay value.
     *                     Client waits for delay duration if specified by server.
     *                     Client transmits the firmware image to the upload URI using HTTP POST.
     *                     Server reprograms itself using the uploaded image, then reboots.
     *
     *                 If the firmware upgrade fails because the upgrade file was invalid, the HTTP POST response
     *                 shall be “415 Unsupported Media Type”. If the firmware upgrade fails due to an error at the
     *                 device, the HTTP POST response shall be “500 Internal Server Error”.
     *                 The value of the Content-Type header in the HTTP POST request shall be “application/octetstream”.
     *
     * @param StartFirmwareUpgrade $parameters
     * @return StartFirmwareUpgradeResponse
     */
    public function StartFirmwareUpgrade(StartFirmwareUpgrade $parameters)
    {
      return $this->__soapCall('StartFirmwareUpgrade', array($parameters));
    }

    /**
     * This operation initiates a system restore from backed up configuration data using the HTTP
     *                 POST mechanism. The response to the command includes an HTTP URL to which the backup
     *                 file may be uploaded. The actual restore takes place as soon as the HTTP POST operation
     *                 has completed. Devices should support system restore through the StartSystemRestore
     *                 command. The exact format of the backup configuration data is outside the scope of this
     *                 specification.
     *                 System restore over HTTP may be achieved using the following steps:
     *                     Client calls StartSystemRestore.
     *                     Server responds with upload URI.
     *                     Client transmits the configuration data to the upload URI using HTTP POST.
     *                     Server applies the uploaded configuration, then reboots if necessary.
     *
     *                 If the system restore fails because the uploaded file was invalid, the HTTP POST response
     *                 shall be “415 Unsupported Media Type”. If the system restore fails due to an error at the
     *                 device, the HTTP POST response shall be “500 Internal Server Error”.
     *                 The value of the Content-Type header in the HTTP POST request shall be “application/octetstream”.
     *
     * @param StartSystemRestore $parameters
     * @return StartSystemRestoreResponse
     */
    public function StartSystemRestore(StartSystemRestore $parameters)
    {
      return $this->__soapCall('StartSystemRestore', array($parameters));
    }

    /**
     * This operation lists all existing storage configurations for the device.
     *
     * @param GetStorageConfigurations $parameters
     * @return GetStorageConfigurationsResponse
     */
    public function GetStorageConfigurations(GetStorageConfigurations $parameters)
    {
      return $this->__soapCall('GetStorageConfigurations', array($parameters));
    }

    /**
     * This operation creates a new storage configuration.
     *                 The configuration data shall be created in the device and shall be persistent (remain after reboot).
     *
     * @param CreateStorageConfiguration $parameters
     * @return CreateStorageConfigurationResponse
     */
    public function CreateStorageConfiguration(CreateStorageConfiguration $parameters)
    {
      return $this->__soapCall('CreateStorageConfiguration', array($parameters));
    }

    /**
     * This operation retrieves the Storage configuration associated with the given storage configuration token.
     *
     * @param GetStorageConfiguration $parameters
     * @return GetStorageConfigurationResponse
     */
    public function GetStorageConfiguration(GetStorageConfiguration $parameters)
    {
      return $this->__soapCall('GetStorageConfiguration', array($parameters));
    }

    /**
     * This operation modifies an existing Storage configuration.
     *
     * @param SetStorageConfiguration $parameters
     * @return SetStorageConfigurationResponse
     */
    public function SetStorageConfiguration(SetStorageConfiguration $parameters)
    {
      return $this->__soapCall('SetStorageConfiguration', array($parameters));
    }

    /**
     * This operation deletes the given storage configuration and configuration change shall always be persistent.
     *
     * @param DeleteStorageConfiguration $parameters
     * @return DeleteStorageConfigurationResponse
     */
    public function DeleteStorageConfiguration(DeleteStorageConfiguration $parameters)
    {
      return $this->__soapCall('DeleteStorageConfiguration', array($parameters));
    }

    /**
     * This operation lists all existing geo location configurations for the device.
     *
     * @param GetGeoLocation $parameters
     * @return GetGeoLocationResponse
     */
    public function GetGeoLocation(GetGeoLocation $parameters)
    {
      return $this->__soapCall('GetGeoLocation', array($parameters));
    }

    /**
     * This operation allows to modify one or more geo configuration entries.
     *
     * @param SetGeoLocation $parameters
     * @return SetGeoLocationResponse
     */
    public function SetGeoLocation(SetGeoLocation $parameters)
    {
      return $this->__soapCall('SetGeoLocation', array($parameters));
    }

    /**
     * This operation deletes the given geo location entries.
     *
     * @param DeleteGeoLocation $parameters
     * @return DeleteGeoLocationResponse
     */
    public function DeleteGeoLocation(DeleteGeoLocation $parameters)
    {
      return $this->__soapCall('DeleteGeoLocation', array($parameters));
    }

}
