<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Postnew */
/* @var $form ActiveForm */
$this->title = 'Đăng mới sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-postnew">
    <h1><?= Html::encode($this->title) ?></h1>
</div>
<div class="postnew">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'userID') ?>
        <?= $form->field($model, 'ProductName') ?>
        <?= $form->field($model, 'Price') ?>
        <?= $form->field($model, 'Category') ?>
        <?= $form->field($model, 'ImageURL') ?>
        <?= $form->field($model, 'Detail') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- postnew -->
