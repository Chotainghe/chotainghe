<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        ]); ?>
        <?= $form->Field($model, 'ProductName')->label('')->textInput(['placeholder' => $model->getAttributeLabel( 'Search' )]) ?>

        <div class="form-group">
            <?= Html::submitButton('Tìm kiếm', ['class' => 'btn btn-primary']) ?>
            <!--  <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?> -->
        </div>
        <?php ActiveForm::end(); ?>
    </div>
    