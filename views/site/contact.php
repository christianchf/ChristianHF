<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\web\View;
use app\assets\ContactoAsset;

ContactoAsset::register($this);

$this->title = 'Contacto';
$this->params['breadcrumbs'][] = $this->title;

$js = <<<EOT
    window.onload = function(){
        $('#opc3').addClass('actual');
    }
EOT;
$this->registerJs($js, View::POS_END);
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')) : ?>

        <div class="alert alert-success">
            Gracias por contactar conmigo. Te responderé lo antes posible.
        </div>

    <?php else : ?>


        <div class="row">
            <div class="col-lg-5">
                <p>Puedes rellenar el siguiente formulario de contacto para realizarme
                cualquier duda o sugerencia que quieras.</p>
                <p>Gracias.</p>

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>

            <div class="col-lg-5">
                <p>También puedes contactar conmigo a través de mi email
                (<span>christianhf.chf@gmail.com</span>) o a través de mi número de
                teléfono (<span>671346980</span>).</p>
            </div>
        </div>

    <?php endif; ?>
</div>
