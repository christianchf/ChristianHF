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
            <ul>
                <li><?= Html::a('<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    Inicio', Url::to(['/site/index']), ['id' => 'opc1']) ?></li>
                <li><?= Html::a('<span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                    Mi CV', Url::to(['/experiencias/cv']), ['id' => 'opc2']) ?></li>
                <li><?= Html::a('<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                    Contacto', Url::to(['/site/contact']), ['id' => 'opc3']) ?></li>
                <?php if (Yii::$app->user->isGuest) { ?>
                    <li><?= Html::a('Login', Url::to(['/site/login']), ['id' => 'opc4']) ?></li>
                <?php } else { ?>
                    <li><?= Html::a('<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                        Experiencias', Url::to(['/experiencias/index']), ['id' => 'opc5']) ?></li>
                    <li><a href="<?= Url::to(['/site/logout']) ?>" data-method="POST">Logout (<?= Yii::$app->user->identity->nombre ?>)</a></li>
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
        <p class="pull-left">&copy; ChristianHF <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
