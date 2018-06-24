<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

use frontend\assets\AppAsset;


use frontend\widgets\PreciseSearch;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500,300&amp;subset=latin,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]><script src="js/css3-mediaqueries.js"></script><![endif]-->
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<?php $this->beginBody() ?>
<div id="container">

    <?= $this->render('//layouts/header') ?>
    <div id="content">
        <div class="cont-in">
            <div class="cover2"></div>
            <div class="sidebar">
                <?= PreciseSearch::widget([
                    'model' => Yii::$app->params[ 'filter' ]
                ])
                ?>
            </div>
            <div class="center">
                <?= $content ?>
            </div>
        </div>
    </div>

    <?= $this->render('//layouts/footer') ?>
</div>
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>