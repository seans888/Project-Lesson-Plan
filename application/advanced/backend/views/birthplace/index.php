<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BirthplaceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Birthplaces';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="birthplace-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Birthplace', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'birthplace',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
