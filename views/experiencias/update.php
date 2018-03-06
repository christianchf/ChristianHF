<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Experiencia */

$this->title = 'Modificar Experiencia: ' . $model->titulo;
$this->params['breadcrumbs'][] = ['label' => 'Experiencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->titulo, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="experiencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'tipos' => $tipos,
    ]) ?>

</div>
