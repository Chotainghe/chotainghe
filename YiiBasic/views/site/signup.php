<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SignupForm */
/* @var $form ActiveForm */
$this->title = 'Sign up';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
	<h1><?= Html::encode($this->title) ?></h1>
	<p>Please fill out the following information</p>
</div>
<div class="signup">

    <?php $form = ActiveForm::begin(['id' => 'site-signup',
                                    'enableAjaxValidation' => true]); ?>

        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'telephone') ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= $form->field($model, 'email') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- signup -->
