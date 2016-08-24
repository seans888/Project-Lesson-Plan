<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\QuarterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Quarters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quarter-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Quarter', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'School_Year',
            'quarter',
            'quarter_start',
            'quarter_end',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
