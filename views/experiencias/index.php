<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\date\DatePicker;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExperienciaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Experiencias';
$this->params['breadcrumbs'][] = $this->title;

$js = <<<EOT
    window.onload = function(){
        $('#opc5').addClass('actual');
    }
EOT;
$this->registerJs($js, View::POS_END);
?>
<div class="experiencia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (!Yii::$app->user->isGuest) { ?>
        <p>
            <?= Html::a('Añadir experiencia', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php } ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'titulo',
            [
                'attribute' => 'tipo',
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => $tipos,
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'filterInputOptions'=>['placeholder'=>'Tipo'],
            ],
            [
                'attribute' => 'entidad',
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => $entidades,
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'filterInputOptions'=>['placeholder'=>'Entidad'],
                'width' => '160px',
            ],
            'descripcion:ntext',
            [
                'label' => 'Fecha de inicio',
                'value' => 'fecha_inicio',
                'filter' => DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'fecha_inicio',
                    'pluginOptions' => [
                        'autoclose'=>true,
                        'format' => 'yyyy-mm-dd',
                    ],
                    'readonly' => true,
                ]),
                'attribute' => 'fecha_inicio',
                'format' => 'date',
                'width' => '130px',
            ],
            [
                'label' => 'Fecha de fin',
                'value' => 'fecha_fin',
                'filter' => DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'fecha_fin',
                    'pluginOptions' => [
                        'autoclose'=>true,
                        'format' => 'yyyy-mm-dd',
                    ],
                    'readonly' => true,
                ]),
                'attribute' => 'fecha_fin',
                'format' => 'date',
                'width' => '130px',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
