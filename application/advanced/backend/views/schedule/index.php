<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ScheduleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Schedules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>

       <?= Html::button('Add Schedule', ['value'=>Url::to('index.php?r=schedule/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>

       <?= Html::button('Create Schedule', ['value'=>Url::to('index.php?r=schedule/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
    </p>


 <?php
    Modal::begin([
        'header'=>'<h4>Schedule</h4>',
        'id' => 'modal',
        'size' => 'modal-lg',
        ]);

     echo "<div id='modalContent'></div>";
     Modal::end();
     ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sub_id',
            'sub_time_start:datetime',
            'sub_time_end:datetime',
            'teach_id',
            // 'acad_year_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
