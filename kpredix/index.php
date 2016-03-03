
<?php
/* @var $this yii\web\View */
$this->title = 'GE Intellect';
use yii\helpers\Html;
use yii\helpers\Url;
/* use yii\bootstrap\ActiveForm; */
use kartik\widgets\ActiveForm;
?>

<body class="homepage">

<!-- Main  -->
<div id="main-wrapper">
    <div id="main" class="container">
    <section class="fill-container full-width news masonry">
        <div class="container">
            <header>
                <div class="pull-center">
                    <h1 >
                            <a class="pull-center" style="font-size:150%;" href="index.php?r=site/index"><?= Html::encode($this->title) ?></a>
                    </h1>

                </div>
            </header>
            <div class="searchpolicy-form">
                <div class="row">
                    <div class="col-lg-10">

                        <?php $form = ActiveForm::begin([
                            'id' => 'omnisearch-form',
                            'method' => 'post',
                            'type' => ActiveForm::TYPE_HORIZONTAL,
                            'options' => ['enctype' => 'multipart/form-data']]); ?>
                        <p></p>

                        <?= $form->field($model, 'searchText')?>

                        <div class="form-group kv-fieldset-inline center">
                            <?= Html::submitButton(Yii::t('app','Search Intellect Now!'), ['class' => 'btn btn-primary', 'name' => 'search-button']) ?>
                            <?= Html::a(Yii::t('app','Advanced Intellect Search!'), ['search/omnisearch'], ['class'=>'btn btn-primary center']) ?>
                            <p></p>
                            <!-- <p><a class="btn btn-primary" href="https://edms.pw.ge.com/dctmquality/component/main?OBJECTID=0b00f5ea803921b9&login=F&ReLoad=1448271759121" target="_blank"><?= Yii::t('app','Search Documentum!') ?> <i class="icon-ico_arrowright_lg"></i></a></p> -->
                        </div>
                    </div>
                </div>
            </div>
            <h2>Areas</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="block feature home">
                        <div class="media">
                            <a href="index.php?r=site/process"> <img src="images/Process1x1.png" height="131" width="150"/></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block feature home">
                        <div class="media">
                            <a href="index.php?r=site/policy"> <img src="images/Policies1x1.png" height="131" width="150"/> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block feature home">
                        <div class="media">
                            <a href="index.php?r=site/reports"> <img src="images/Reports1x1.png" height="131" width="150"/></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block feature home">
                        <div class="media">
                            <a href="index.php?r=site/documents"> <img src="images/GEIDocumentum.png" height="131" width="150"/></a>
                        </div>
                    </div>
                </div>

                <!--
                <div class="col-md-2">
                    <div class="block feature home">
                        <div class="media">
                            <a href="index.php?r=search/searchcomp"> <img src="images/ge-monogram-1x1.png"/></a>
                        </div>
                        <h3 class="title voice-brand"> <a href="index.php?r=search/searchextpol"></a></h3>
                        <p><a href="index.php?r=search/searchcomp">Search Corp.</a></p>
                        <p><a class="btn btn-link" href="index.php?r=search/searchcomp">Search Corp!<i class="icon-ico_arrowright_lg"></i></a></p>
                    </div>
                </div>
                -->

                <!--
                <div cl ass="col-md-4">
                    <div class="block feature home">
                        <div class="media">
                            <a href="index.php?r=site/admin"> <img src="images/Admin4y.jpg"/></a>
                        </div>
                        <h3 class="title voice-brand">Manage Documents</h3>
                        <p><span class="timestamp">October 14, 2015</span>Upload, Manage Indexes, Rebuild Indexes and Projects.</p>
                        <p><a class="btn btn-link" href="index.php?r=site/admin">Mischief Managed!<i class="icon-ico_arrowright_lg"></i></a></p>
                    </div>
                </div>
                -->
            </div>
        </div>
    </section>
    </div>
    </div>
</body>