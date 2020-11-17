<?php

namespace modules\master;

use Yii;
use yii\i18n\PhpMessageSource;

/**
 * Class Bootstrap
 * @package modules\main
 */
class Bootstrap
{
    public function __construct()
    {
        // If there is support for i18n then we set up here
        $i18n = Yii::$app->i18n;
        $i18n->translations['modules/master/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => '@modules/master/messages',
            'fileMap' => [
                'modules/master/module' => 'module.php',
            ],
        ];

        // Rules of routing here
        $urlManager = Yii::$app->urlManager;
        $urlManager->addRules(
            [
                // Declaration of rules here
                'master/' => 'master/default/index',
                'master/<_a:[\w\-]+>' => 'master/default/<_a>',

                'dokter' => 'master/dokter/index',
                'dokter/<_a:[\w\-]+>' => 'master/dokter/<_a>',

                'provinsi' => 'master/provinsi/index',
                'provinsi/<_a:[\w\-]+>' => 'master/provinsi/<_a>',

                'kota' => 'master/kota/index',
                'kota/<_a:[\w\-]+>' => 'master/kota/<_a>',

                'kecamatan' => 'master/kecamatan/index',
                'kecamatan/<_a:[\w\-]+>' => 'master/kecamatan/<_a>',

                'kelurahan' => 'master/kelurahan/index',
                'kelurahan/<_a:[\w\-]+>' => 'master/kelurahan/<_a>',
                
                'penyakit' => 'master/penyakit/index',
                'penyakit/<_a:[\w\-]+>' => 'master/penyakit/<_a>',

                'unit' => 'master/unit/index',
                'unit/<_a:[\w\-]+>' => 'master/unit/<_a>',

                'pabrik' => 'master/pabrik/index',
                'pabrik/<_a:[\w\-]+>' => 'master/pabrik/<_a>',

                'apt-satuan' => 'master/apt_satuan/index',
                'apt-satuan/<_a:[\w\-]+>' => 'master/apt_satuan/<_a>',

                'apt-satuan-besar' => 'master/apt_satuan_besar/index',
                'apt-satuan-besar/<_a:[\w\-]+>' => 'master/apt_satuan_besar/<_a>',

                'apt-obat' => 'master/apt_obat/index',
                'apt-obat/<_a:[\w\-]+>' => 'master/apt_obat/<_a>',
            ]
        );
    }
}