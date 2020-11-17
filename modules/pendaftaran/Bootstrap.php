<?php

namespace modules\pendaftaran;

use Yii;
use yii\i18n\PhpMessageSource;
use yii\web\GroupUrlRule;

/**
 * Class Bootstrap
 * @package modules\pendaftaran
 */
class Bootstrap
{
    /**
     * Bootstrap constructor.
     */
    public function __construct()
    {
        $this->registerTranslations();
        $urlManager = Yii::$app->urlManager;
        $urlManager->addRules($this->rules());
    }

    /**
     * Register Translations
     */
    public function registerTranslations()
    {
        $i18n = Yii::$app->i18n;
        $i18n->translations['modules/pendaftaran/*'] = [
            'class' => PhpMessageSource::class,
            'basePath' => '@modules/pendaftaran/messages',
            'fileMap' => [
                'modules/pendaftaran/module' => 'module.php'
            ]
        ];
    }

    /**
     * @return array
     */
    protected function rules()
    {
        $rules = [];
        array_push($rules, $this->rulesDiagnosa(), $this->rulesAnamnesa(), $this->rulesKunjungan(), $this->rulesPasien(), $this->rulesDefault());
        return $rules;
    }

    /**
     * @return array
     */
    protected function rulesDiagnosa()
    {
        return [
            'class' => GroupUrlRule::class,
            'routePrefix' => 'pendaftaran/diagnosa',
            'prefix' => 'pendaftaran',
            'rules' => [
                'diagnosa' => 'index',
                'diagnosa/<id:\d+>/<_a:[\w\-]+>' => 'diagnosa/<_a>',
                'diagnosa/<_a:[\w\-]+>' => '<_a>'
            ]
        ];
    }
    
    /**
     * @return array
     */
    protected function rulesAnamnesa()
    {
        return [
            'class' => GroupUrlRule::class,
            'routePrefix' => 'pendaftaran/anamnesa',
            'prefix' => 'pendaftaran',
            'rules' => [
                'anamnesa' => 'index',
                'anamnesa/<id:\d+>/<_a:[\w\-]+>' => 'anamnesa/<_a>',
                'anamnesa/<_a:[\w\-]+>' => '<_a>'
            ]
        ];
    }

    /**
     * @return array
     */
    protected function rulesKunjungan()
    {
        return [
            'class' => GroupUrlRule::class,
            'routePrefix' => 'pendaftaran/kunjungan',
            'prefix' => 'pendaftaran',
            'rules' => [
                'kunjungan' => 'index',
                'kunjungan/<id:\d+>/<_a:[\w\-]+>' => 'kunjungan/<_a>',
                'kunjungan/<_a:[\w\-]+>' => '<_a>'
            ]
        ];
    }

    /**
     * @return array
     */
    protected function rulesPasien()
    {
        return [
            'class' => GroupUrlRule::class,
            'routePrefix' => 'pendaftaran/pasien',
            'prefix' => 'pendaftaran',
            'rules' => [
                'pasien' => 'index',
                'pasien/<id:\d+>/<_a:[\w\-]+>' => 'pasien/<_a>',
                'pasien/<_a:[\w\-]+>' => '<_a>'
            ]
        ];
    }

    /**
     * @return array
     */
    protected function rulesDefault()
    {
        return [
            'class' => GroupUrlRule::class,
            'routePrefix' => 'pendaftaran/default',
            'prefix' => 'pendaftaran',
            'rules' => [
                '' => 'index',
                '<id:\d+>/<_a:[\w\-]+>' => 'default/<_a>',
                '<_a:[\w\-]+>' => '<_a>'
            ]
        ];
    }
}
