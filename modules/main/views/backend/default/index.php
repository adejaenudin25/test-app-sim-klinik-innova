<?php

use modules\main\Module;
use backend\widgets\box\SmallBox;
use backend\widgets\chart\chartjs\Chart;
use backend\widgets\chart\flot\Chart as FlotChart;
use backend\widgets\map\jvector\Map;
use backend\widgets\chart\sparkline\Chart as SparklineChart;
use yii\helpers\Url;
use modules\pendaftaran\models\Kunjungan;

/* @var $this yii\web\View */
/** @var $usersCount int */

$this->title = Module::translate('module', 'Home');
$this->params['title']['small'] = Module::translate('module', 'Dashboard');
?>

<section class="content main-backend-default-index">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <?= SmallBox::widget([
                'status' => true,
                'style' => SmallBox::BG_AQUA,
                'icon' => 'ion-bag',
                'header' => $pasienCount,
                'content' => 'Pasien Didaftarkan',
                'link' => [
                    'label' => Yii::t(
                        'app',
                        'More info'
                    ) . ' <i class="fa fa-arrow-circle-right"></i>',
                    'url' => ['#']
                ]
            ]) ?>
        </div>
        <div class="col-lg-3 col-xs-6">
            <?= SmallBox::widget([
                'status' => true,
                'style' => SmallBox::BG_GREEN,
                'icon' => 'ion-stats-bars',
                'header' => $pasienCount,
                'content' => 'Pasien Dilayani',
                'link' => [
                    'label' => Yii::t(
                        'app',
                        'More info'
                    ) . ' <i class="fa fa-arrow-circle-right"></i>',
                    'url' => ['#']
                ]
            ]) ?>
        </div>
        <div class="col-lg-3 col-xs-6">
            <?= SmallBox::widget([
                'status' => true,
                'style' => SmallBox::BG_YELLOW,
                'icon' => 'ion-person-add',
                'header' => $usersCount,
                'content' => Yii::t('app', 'User Registrations'),
                'link' => [
                    'label' => Yii::t(
                        'app',
                        'More info'
                    ) . ' <i class="fa fa-arrow-circle-right"></i>',
                    'url' => ['/users/default/index']
                ]
            ]) ?>
        </div>
        <div class="col-lg-3 col-xs-6">
            <?= SmallBox::widget([
                'status' => true,
                'style' => SmallBox::BG_RED,
                'icon' => 'ion-pie-graph',
                'header' => $paidCount,
                'content' => 'Pasien Membayar',
                'link' => [
                    'label' => Yii::t(
                        'app',
                        'More info'
                    ) . ' <i class="fa fa-arrow-circle-right"></i>',
                    'url' => ['#']
                ]
            ]) ?>
        </div>
    </div>
    <div class="row">
        <section class="col-lg-7 connectedSortable">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                    <li><a href="#line-chart" data-toggle="tab">Line</a></li>
                    <li class="active"><a href="#bar-chart" data-toggle="tab">Bar</a></li>
                    <li class="pull-left header"><i class="fa fa-bar-chart"></i> Grafik Kunjungan</li>
                </ul>

                <div class="tab-content no-padding">
                    <div id="line-chart" class="chart tab-pane">
                        <?= Chart::widget([
                            'status' => true,
                            'type' => Chart::TYPE_LINE,
                            'clientOptions' => [
                                'responsive' => true,
                                'title' => [
                                    'display' => true,
                                    'text' => 'Chart.js Line Chart'
                                ],
                                'scales' => [
                                    'xAxes' => [
                                        [
                                            'display' => true,
                                            'scaleLabel' => [
                                                'display' => true,
                                                'labelString' => 'Month'
                                            ]
                                        ]
                                    ],
                                    'yAxes' => [
                                        [
                                            'display' => true,
                                            'scaleLabel' => [
                                                'display' => true,
                                                'labelString' => 'Value'
                                            ]
                                        ]
                                    ],
                                ],
                            ],
                            'clientData' => [
                                'labels' => $dataGrafikBulan,
                                'datasets' => [
                                    [
                                        'label' => 'Pasien',
                                        'hidden' => false,
                                        'fill' => false,
                                        'backgroundColor' => 'rgb(160, 208, 224, 0.5)',
                                        'borderColor' => 'rgb(160, 208, 224, 0.8)',
                                        'data' => $dataGrafikJumlah
                                    ]
                                ],
                            ]
                        ]) ?>
                    </div>
                    <div id="bar-chart" class="chart tab-pane active">
                        <?= Chart::widget([
                            'status' => true,
                            'type' => Chart::TYPE_BAR,
                            'clientOptions' => [
                                'responsive' => true,
                                'title' => [
                                    'display' => true,
                                    'text' => 'Chart.js Bar Chart'
                                ],
                                'scales' => [
                                    'xAxes' => [
                                        [
                                            'display' => true,
                                            'scaleLabel' => [
                                                'display' => true,
                                                'labelString' => 'Month'
                                            ]
                                        ]
                                    ],
                                    'yAxes' => [
                                        [
                                            'display' => true,
                                            'scaleLabel' => [
                                                'display' => true,
                                                'labelString' => 'Value'
                                            ]
                                        ]
                                    ],
                                ],
                            ],
                            'clientData' => [
                                'labels' => $dataGrafikBulan,
                                'datasets' => [
                                    [
                                        'label' => 'Pasien',
                                        'backgroundColor' => 'rgb(160, 208, 224, 0.5)',
                                        'data' => $dataGrafikJumlah
                                    ]
                                ],
                            ]
                        ]) ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="col-lg-5 connectedSortable">
            <div class="box box-solid bg-light-blue-gradient">
                <div class="box-header">
                    <div class="box-tools pull-right">
                        <!--<button type="button"
                         class="btn btn-primary btn-sm daterange pull-right"
                         data-toggle="tooltip"
                                title="Date range">
                            <i class="fa fa-calendar"></i></button>-->
                        <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                                data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <i class="fa fa-map-marker"></i>
                    <h3 class="box-title">Visitors</h3>
                </div>
                <div class="box-body">
                    <?= Map::widget([
                        'status' => true,
                        'containerOptions' => [
                            'style' => 'height: 250px; width:100%;'
                        ],
                        'maps' => [
                            'world_mill_en' => 'world-mill-en',
                            'world_mill' => 'world-mill'
                        ],
                        'clientOptions' => [
                            'map' => 'world_mill_en',
                            'backgroundColor' => 'transparent',
                            'regionStyle' => [
                                'initial' => [
                                    'fill' => '#e4e4e4',
                                    'fill-opacity' => 1,
                                    'stroke' => 'none',
                                    'stroke-width' => 0,
                                    'stroke-opacity' => 1
                                ]
                            ],
                            'series' => [
                                'regions' => [
                                    [
                                        'values' => backend\components\Demo::getVisitorsData(),
                                        'scale' => ['#92c1dc', '#ebf4f9'],
                                        'normalizeFunction' => 'polynomial',
                                    ]
                                ]
                            ],
                            'onRegionTipShow' => new yii\web\JsExpression("
                                function (e, el, code) {
                                    let regions = $(this).data().mapObject.params.series.regions,
                                        visitorsData = regions[0].values;
                                    if (typeof visitorsData[code] !== 'undefined') {
                                        el.html(el.html() + ': ' + visitorsData[code] + ' new visitors');
                                    }
                                }
                            ")
                        ]
                    ]) ?>
                </div>
                <div class="box-footer no-border">
                    <div class="row">
                        <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                            <?= SparklineChart::widget([
                                'status' => true,
                                'clientData' => [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
                                'clientOptions' => [
                                    'type' => 'line',
                                    'lineColor' => '#92c1dc',
                                    'fillColor' => '#ebf4f9',
                                    'height' => '50',
                                    'width' => '80'
                                ],
                            ]) ?>
                            <div class="knob-label">Visitors</div>
                        </div>
                        <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                            <?= SparklineChart::widget([
                                'status' => true,
                                'clientData' => [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
                                'clientOptions' => [
                                    'type' => 'line',
                                    'lineColor' => '#92c1dc',
                                    'fillColor' => '#ebf4f9',
                                    'height' => '50',
                                    'width' => '80'
                                ],
                            ]) ?>
                            <div class="knob-label">Online</div>
                        </div>
                        <div class="col-xs-4 text-center">
                            <?= SparklineChart::widget([
                                'status' => true,
                                'clientData' => [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
                                'clientOptions' => [
                                    'type' => 'line',
                                    'lineColor' => '#92c1dc',
                                    'fillColor' => '#ebf4f9',
                                    'height' => '50',
                                    'width' => '80'
                                ],
                            ]) ?>
                            <div class="knob-label">Exists</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
