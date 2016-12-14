<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="MR PING">
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
    <title>Chợ tai nghe - DAC - Hi-res </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">
    <style>
        .navbar-brand{
            padding-top:0px; padding-left:0px;
        }
        .navbar-inverse {
            background-color: black;
            border-color: #080808;
        }
        .nav-list{
            float: right;
        }
    </style>
</head>

<body>
    <?php $this->beginBody() ?>    
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/images/logo.jpg',['width'=>'150px'],
         ['alt'=>Yii::$app->name]),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
        'class' => 'navbar-inverse navbar-fixed-top','stylle'=>'background-color:black',
        ],
        ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
        ['label' => 'Tai Nghe', 'url' => ['product/index']],
        ['label' => 'DAC-Ampli', 'url' => ['#']],
        ['label' => 'Máy Nghe Nhạc', 'url' => ['#']],
        ['label' => 'Loa Mini/Bluetooth', 'url' => ['#']],
        ],
        ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
        Yii::$app->user->isGuest ? (
            ['label' => 'Đăng nhập', 'url' => ['/site/login']]
            ) : (
            '<li>'
            .Html::a(Html::submitButton('Đăng Tin',['class' => 'btn btn-link']),['/product/create'])
            .'</li>'
            .'<li>'
            . Html::beginForm(['/site/logout'], 'post',['class' => 'navbar-form'])
            . Html::submitButton(
                'Đăng xuất (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
                )   
            . Html::endForm()
            .'</li>'
            ),
            ],
            ]);
    NavBar::end();
    ?>
    <!-- /.container -->
</nav>
<!-- Page Content -->
<div class="container">
    <div class="row">

        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="list-group">
                <a href="#" class="list-group-item active">Tất cả</a>
                <a href="#" class="list-group-item">Tai nghe AKG</a>
                <a href="#" class="list-group-item">Tai nghe xiaomi</a>
                <a href="#" class="list-group-item">Tai nghe sony</a>
                <a href="#" class="list-group-item">Loa BMB</a>
                <a href="#" class="list-group-item">Loa JBL</a>
            </div>
        </div>

        <div class="container">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?= $content ?>
                </div>
            </div>

            <footer class="footer">
                <div class="container">
                    <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

                    <p class="pull-right"><?= Yii::powered() ?></p>
                </div>
            </footer>

            <?php $this->endBody() ?>
        </body>
        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        </html>
        <?php $this->endPage() ?>
