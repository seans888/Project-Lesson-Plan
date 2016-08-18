<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AcademicYearSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Academic Year Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-year-post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Academic Year Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'acad_year_start',
            'acad_year_end',
            'quart1_start_period',
            'quart1_end_period',
            // 'quart2_start_period',
            // 'quart2_end_period',
            // 'quart3_start_period',
            // 'quart3_end_period',
            // 'quart4_start_period',
            // 'quart4_end_period',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
