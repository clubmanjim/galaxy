<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('coupon', 'Coupons');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coupon-index">

    <?= GridView::widget([
        'export'=>false,
        'responsive'=>false,
        'dataProvider' => $dataProvider,
        'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
        'headerRowOptions'=>['class'=>'kartik-sheet-style'],
        'filterRowOptions'=>['class'=>'kartik-sheet-style'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'coupon_no',
            'status',
            'start_at',
            'end_at',

            [
                'class' => 'yii\grid\ActionColumn',
                "buttons" =>
                    [
                        'view' => function ($url, $model) {
                            return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', ['view']);
                        },
                        'update' => function ($url, $model) {
                            return ;
                        },
                    ]
            ],
        ],
        'panel'=>[
            'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i> '.Yii::t('coupon','Coupon').'</h3>',
            'type'=>'success',
            'footer'=>false
        ],
        'toolbar' => [
            '{export}',
            '{toggleData}'
        ],
        'toggleDataContainer' => ['class' => 'btn-group-sm'],
        'exportContainer' => ['class' => 'btn-group-sm']
    ]); ?>

</div>
