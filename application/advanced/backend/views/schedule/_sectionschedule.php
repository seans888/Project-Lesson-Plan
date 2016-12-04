<?php
use common\models\Schedules;
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


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'section',
            'sub_time_start:datetime',
            'sub_time_end:datetime',
            'teach_id',
            // 'acad_year_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
