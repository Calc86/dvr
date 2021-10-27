<?php

namespace app\controllers;

use app\modules\dvr\components\onvif\wsdl\CapabilityCategory;
use app\modules\dvr\components\onvif\wsdl\GetAccessPolicy;
use app\modules\dvr\components\onvif\wsdl\GetCapabilities;
use app\modules\dvr\components\onvif\wsdl\GetDeviceInformation;
use app\modules\dvr\components\onvif\wsdl\GetHostname;
use app\modules\dvr\components\onvif\wsdl\GetSystemLog;
use app\modules\dvr\components\onvif\wsdl\SystemLogType;
use app\modules\dvr\components\onvif\WsdlOnvif;
use Rockyjvec\Onvif\Onvif;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionTest() {
//        $pass = 'Visual';
//        $created = gmdate('Y-m-d\TH:i:s\Z');
//        $nonce = mt_rand();
//        $passdigest = base64_encode( pack('H*', sha1( pack('H*', $nonce) . pack('a*',$created).  pack('a*',$pass))));
//        var_dump($passdigest);
//        die();
//        $r = Onvif::Discovery();
//        print_r($r);
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
        $o = new WsdlOnvif("http://10.1.1.250/onvif/device_service", 'admin', 'Visual');
        $o2 = new Onvif("http://10.1.1.250/onvif/device_service", 'admin', 'Vddisual');
        $data = $o->device->GetAccessPolicy(new GetAccessPolicy());
        //$data = $o->device->GetDeviceInformation(new GetDeviceInformation());
        echo json_encode(ArrayHelper::toArray($data));
//        die();
//        $o = new Onvif("http://10.1.1.250/onvif/device_service", 'admin', 'Visual');
//        echo json_encode(ArrayHelper::toArray($o->device->GetCapabilities()));
        die();
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
