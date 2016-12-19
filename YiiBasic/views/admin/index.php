<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'userID',
            'ProductName',
            'Price',
            'Category',
            // 'ImageURL:url',
            // [
            // 'attribute' => 'ImageURL',
            // 'format' => 'html',
            // 'label' => 'Image',
            // 'value' => function ($data) {
            //     return Html::img("ImageURL". $data['ImageURL'],
            //         ['width' => '60px']);
            // },
            // ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
