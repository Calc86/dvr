<?php

namespace app\modules\dvr\components\onvif;

use app\modules\dvr\components\onvif\wsdl\DeviceService;
use Rockyjvec\Onvif\Onvif;
use SoapFault;

/**
 * @property DeviceService $device
 */
class WsdlOnvif extends Onvif
{
    /**
     * @param $location
     * @param $username
     * @param $password
     * @throws SoapFault
     */
    public function __construct($location, $username, $password)
    {
        parent::__construct($location, $username, $password);

        $this->device = new DeviceService($location, $username, $password);
    }

    public static function generate() {
        die();  // переписывает *Service файлы
//        $generator = new \Wsdl2PhpGenerator\Generator();
//        $input = Yii::getAlias('@app/modules/dvr/components/onvif/devicemgmt.wsdl');
//        $output = Yii::getAlias('@app/modules/dvr/components/onvif/wsdl');
//        $namespaceName = 'app\modules\dvr\components\onvif\wsdl';
//        $generator->generate(
//            new \Wsdl2PhpGenerator\Config(array(
//                'inputFile' => $input,
//                'outputDir' => $output,
//                'namespaceName' => $namespaceName,
//            ))
//        );
//        die();
    }
}
