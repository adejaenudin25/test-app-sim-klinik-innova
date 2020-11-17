<?php

namespace modules\main\controllers\backend;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use modules\users\models\User;
use modules\pendaftaran\models\Pasien;
use modules\pendaftaran\models\Kunjungan;
use modules\rbac\models\Permission;
use modules\main\Module;
use backend\components\Demo;

/**
 * Class DefaultController
 * @package modules\main\controllers\backend
 */
class DefaultController extends Controller
{
    /**
     * @inheritdoc
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['index', 'get-demo-data'],
                        'allow' => true,
                        'roles' => [Permission::PERMISSION_VIEW_ADMIN_PAGE]
                    ]
                ]
            ]
        ];
    }

    /**
     * Displays homepage.
     * @return mixed|Response
     */
    public function actionIndex()
    {
        /** @var yii\web\User $user */
        $user = Yii::$app->user;
        if (!$user->can(Permission::PERMISSION_VIEW_ADMIN_PAGE)) {
            /** @var yii\web\Session $session */
            $session = Yii::$app->session;
            $session->setFlash('error', Module::translate('module', 'You are not allowed access!'));
            return $this->goHome();
        }
        //Greeting in the admin panel :)
        /** @var yii\web\Session $session */
        $session = Yii::$app->session;
        $key = 'msgHello';
        if ($session->get($key) !== 1) {
            /** @var User $identity */
            $identity = Yii::$app->user->identity;
            $session->setFlash('info', Module::translate('module', 'Welcome, {:username}!', [
                ':username' => $identity->username
            ]));
            $session->set($key, 1);
        }

        $data = Yii::$app->db->createCommand(
            "
            SELECT 
            CASE date_part('month', tgl_daftar)
                WHEN 1 THEN
                    'januari'
                WHEN 2 THEN
                    'februari'
                WHEN 3 THEN
                    'maret'
                WHEN 4 THEN
                    'april'
                WHEN 5 THEN
                    'mei'
                WHEN 6 THEN
                    'juni'
                WHEN 7 THEN
                    'juli'
                WHEN 8 THEN
                    'agustus'
                WHEN 9 THEN
                    'september'
                WHEN 10 THEN
                    'oktober'
                WHEN 11 THEN
                    'november'
                WHEN 12 THEN
                    'desember'
            END as bulan,

            CASE date_part('month', tgl_daftar)
                WHEN 1 THEN
                    count(kd_pasien)
                WHEN 2 THEN
                    count(kd_pasien)
                WHEN 3 THEN
                    count(kd_pasien)
                WHEN 4 THEN
                    count(kd_pasien)
                WHEN 5 THEN
                    count(kd_pasien)
                WHEN 6 THEN
                    count(kd_pasien)
                WHEN 7 THEN
                    count(kd_pasien)
                WHEN 8 THEN
                    count(kd_pasien)
                WHEN 9 THEN
                    count(kd_pasien)
                WHEN 10 THEN
                    count(kd_pasien)
                WHEN 11 THEN
                    count(kd_pasien)
                WHEN 12 THEN
                    count(kd_pasien)
            END as jumlah

             FROM tbl_kunjungan
             WHERE date_part('year', tgl_daftar) = '".date('Y')."'
             GROUP BY date_part('month', tgl_daftar)
            "
        )->queryAll();

        $arrBulan = array();
        $arrJumlah = array();

        foreach ($data as $key => $value) {
            
            array_push($arrBulan, $value['bulan']);
            array_push($arrJumlah, $value['jumlah']);
        }

        // print_r(json_encode($data));die;

        return $this->render('index', [
                'usersCount' => User::find()->count(),
                'pasienCount' => Pasien::find()->count(),
                'paidCount' => Kunjungan::find()->count(),
                'dataGrafik' => $data,
                'dataGrafikBulan' => $arrBulan,
                'dataGrafikJumlah' => $arrJumlah
            ]);
    }

    /**
     * Get Demo Data
     *
     * @return array
     * @throws NotFoundHttpException
     */
    public function actionGetDemoData()
    {
        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            $post = Yii::$app->request->post();
            $data = (!empty($post['data'])) ? $post['data'] : [];
            return [
                'result' => Demo::getRandomData($data),
            ];
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
