
<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use common\models\SectionScheduleSearch;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ScheduleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Schedules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-index">


    <?= GridView::widget([
       'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        
        'columns' => [
        
           ['class' => 'yii\grid\SerialColumn'],
            

            'sub.sub_name',
            'subTimeStart.time',
            'subTimeEnd.time',
            'section0.sec_name',
           // 'section',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
