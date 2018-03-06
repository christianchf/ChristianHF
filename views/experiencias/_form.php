<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Experiencia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="experiencia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->widget(Select2::classname(), [
            'data' => $tipos,
            'options' => ['placeholder' => 'Tipos'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]) ?>
    <?= $form->field($model, 'entidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'fecha_inicio')->widget(DatePicker::classname(), [
                    'options' => ['placeholder' => 'Introduzca la fecha de inicio.'],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'todayBtn' => true,
                        'format' => 'yyyy-mm-dd',
                    ],
                    'readonly' => true,
                ]); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'fecha_fin')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Introduzca la fecha de fin.'],
                'pluginOptions' => [
                    'autoclose' => true,
                    'todayBtn' => true,
                    'format' => 'yyyy-mm-dd',
                ],
                'readonly' => true,
            ]); ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Añadir', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
