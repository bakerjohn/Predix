<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Dropdown;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <?php
    $this->registerLinkTag([
        'title' => 'Favorite Icon',
        'rel' => 'shortcut icon',
        'type' => 'image/ge-logo',
        'src' => 'images/favicon.ico',
    ]);
    ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
            NavBar::begin(array(
                'brandLabel' => Html::img('@web/images/ge-6x.png', ['alt'=>Yii::$app->name]),
                'brandUrl' => Yii::$app->homeUrl,
                'options' => array(
                    'class' => 'navbar-inverse navbar-fixed-top',
                ),
            ));
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'My Intellect', 'url' => ['/site/myintellect']],
            ];

            echo Nav::widget([
                'options' => ['class' => 'nav navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container content">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>

            <?= $content ?>

        </div>
    </div>

    <footer class="footer" >
        <!-- Footer -->
        <div class="container">
                <div id="copyright" class="pull-left">&copy; GE Power Conversions <?= date('Y') ?>. <?= Yii::t('app','All rights reserved.'); ?></div>
        </div>

    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
