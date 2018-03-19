<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\View;
use app\assets\CvAsset;

CvAsset::register($this);

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExperienciaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mi CV';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="experiencia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <section>
        <h3>Formación académica</h3>
        <?php for ($i = 0; $i < count($formaciones); $i++) { ?>
            <article>
                <div><?= Yii::$app->formatter->format($formaciones[$i]['fecha_inicio'], 'date') ?>
                    - <?= Yii::$app->formatter->format($formaciones[$i]['fecha_fin'], 'date') ?>
                </div>
                <div>
                    <?= $formaciones[$i]['titulo'] ?> (<?= $formaciones[$i]['entidad'] ?>)
                </div>
                <div>
                    <span class="glyphicon glyphicon-plus"></span>
                    <span class="glyphicon glyphicon-minus"></span>
                </div>
            </article>
            <article class="descripcion">
                <?= $formaciones[$i]['descripcion'] ?>
            </article>
        <?php } ?>
    </section>
    <section>
        <h3>Experiencia profesional</h3>
        <?php for ($i = 0; $i < count($profesionales); $i++) { ?>
            <article>
                <div><?= Yii::$app->formatter->format($profesionales[$i]['fecha_inicio'], 'date') ?>
                    - <?= Yii::$app->formatter->format($profesionales[$i]['fecha_fin'], 'date') ?>
                </div>
                <div>
                    <?= $profesionales[$i]['titulo'] ?> (<?= $profesionales[$i]['entidad'] ?>)
                </div>
                <div>
                    <span class="glyphicon glyphicon-plus"></span>
                    <span class="glyphicon glyphicon-minus"></span>
                </div>
            </article>
            <article class="descripcion">
                <?= $profesionales[$i]['descripcion'] ?>
            </article>
        <?php } ?>
    </section>
    <section>
        <h3>Formación complementaria</h3>
        <?php for ($i = 0; $i < count($complementarias); $i++) { ?>
            <article>
                <div><?= Yii::$app->formatter->format($complementarias[$i]['fecha_inicio'], 'date') ?>
                    - <?= Yii::$app->formatter->format($complementarias[$i]['fecha_fin'], 'date') ?>
                </div>
                <div>
                    <?= $complementarias[$i]['titulo'] ?> (<?= $complementarias[$i]['entidad'] ?>)
                </div>
                <div>
                    <span class="glyphicon glyphicon-plus"></span>
                    <span class="glyphicon glyphicon-minus"></span>
                </div>
            </article>
            <article class="descripcion">
                <?= $complementarias[$i]['descripcion'] ?>
            </article>
        <?php } ?>
    </section>

</div>
