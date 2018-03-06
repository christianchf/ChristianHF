<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExperienciaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mi CV';
$this->params['breadcrumbs'][] = $this->title;

$js = <<<EOT
    window.onload = function(){
        $('#opc2').addClass('actual');
    }
EOT;
$this->registerJs($js, View::POS_END);
?>
<div class="experiencia-index">

    <h1><?= Html::encode($this->title) ?></h1>

</div>
