<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>ChristianHF</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <nav>
        <div>
            <?= Html::a('CHRISTIANHF', Url::to(['/site/index'])) ?>
        </div>
        <div>
            <ul id="menu1">
                <li><?= Html::a('<span class="glyphicon glyphicon-home" title="Inicio" aria-hidden="true"></span>
                    Inicio', Url::to(['/site/index']), ['id' => 'opc1', 'class' => 'opc']) ?></li>
                <li><?= Html::a('<span class="glyphicon glyphicon-file" title="Mi CV" aria-hidden="true"></span>
                    Mi CV', Url::to(['/experiencias/cv']), ['id' => 'opc2', 'class' => 'opc']) ?></li>
                <li><?= Html::a('<span class="glyphicon glyphicon-send" title="Contacto" aria-hidden="true"></span>
                    Contacto', Url::to(['/site/contact']), ['id' => 'opc3', 'class' => 'opc']) ?></li>
                <?php if (!Yii::$app->user->isGuest) { ?>
                    <li><?= Html::a('<span class="glyphicon glyphicon-folder-open" title="Experiencias" aria-hidden="true"></span>
                        Experiencias', Url::to(['/experiencias/index']), ['id' => 'opc5', 'class' => 'opc']) ?></li>
                    <li><a href="<?= Url::to(['/site/logout']) ?>" data-method="POST">Logout (<?= Yii::$app->user->identity->nombre ?>)</a></li>
                <?php } ?>
            </ul>
            <ul id="menu2">
                <li><?= Html::a('<span class="glyphicon glyphicon-home" title="Inicio" aria-hidden="true"></span>
                    ', Url::to(['/site/index']), ['id' => 'opc1', 'class' => 'opc']) ?></li>
                <li><?= Html::a('<span class="glyphicon glyphicon-file" title="Mi CV" aria-hidden="true"></span>
                    ', Url::to(['/experiencias/cv']), ['id' => 'opc2', 'class' => 'opc']) ?></li>
                <li><?= Html::a('<span class="glyphicon glyphicon-send" title="Contacto" aria-hidden="true"></span>
                    ', Url::to(['/site/contact']), ['id' => 'opc3', 'class' => 'opc']) ?></li>
                <?php if (!Yii::$app->user->isGuest) { ?>
                    <li><?= Html::a('<span class="glyphicon glyphicon-folder-open" title="Experiencias" aria-hidden="true"></span>
                        ', Url::to(['/experiencias/index']), ['id' => 'opc5', 'class' => 'opc']) ?></li>
                    <li><a href="<?= Url::to(['/site/logout']) ?>" data-method="POST"><span class="glyphicon glyphicon-log-out" title="Logout" aria-hidden="true"></span></a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="pull-left">
            <p>&copy; ChristianHF <?= date('Y') ?></p>
            <p>Sanlúcar de Barrameda (Cádiz)</p>
        </div>
        <div class="pull-right">
            <p>Email: <span>christianhf.chf@gmail.com</span></p>
            <p>Teléfono: <span>671346980</span></p>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
