<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SchedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sched Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sched-post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sched Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sub_id',
            'sec_id',
            'acad_year_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
