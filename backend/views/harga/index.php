<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\HargaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hargas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="harga-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Harga', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'jenis_kendaraan',
            'harga',
            'create_date',
            'update_date',
            // 'status',
            // 'approval',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
