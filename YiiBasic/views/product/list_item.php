<?php
// _list_item.php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<article class="item col-md-12 col-sm-12 col-xs-12" data-key="<?= $model->ID; ?>">
    <h4 class="title">
    <?= Html::a(Html::encode($model->ProductName), ['view', 'id' => $model->ID]) ?>
    </h4>
    <?= Html::img($model->ImageURL,['class' => 'col-md-9 col-sm-12 col-xs-12 img-responsive']) ?>
</article>