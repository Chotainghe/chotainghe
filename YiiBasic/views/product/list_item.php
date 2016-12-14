<?php
// _list_item.php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<article class="item" data-key="<?= $model->ID; ?>">
    <h4 class="title">
    <?= Html::a(Html::encode($model->ProductName), ['view', 'id' => $model->ID]) ?>
    </h4>
    <?= Html::img($model->ImageURL,['class' => 'img-responsive']) ?>
</article>