<?php

namespace modules\mdokter;

use Yii;

/**
 * Class Bootstrap
 * @package modules\mdokter
 */
class Bootstrap
{
    public function __construct()
    {
        // If there is support for i18n then we set up here
        $i18n = Yii::$app->i18n;
        $i18n->translations['modules/mdokter/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => '@modules/mdokter/messages',
            'fileMap' => [
                'modules/mdokter/module' => 'module.php',
            ],
        ];

        // Rules of routing here
        $urlManager = Yii::$app->urlManager;
        $urlManager->addRules(
            [
                // Declaration of rules here
                'mdokter' => 'mdokter/default/index',
                'mdokter/<_a:[\w\-]+>' => 'mdokter/default/<_a>',
            ]
        );
    }
}