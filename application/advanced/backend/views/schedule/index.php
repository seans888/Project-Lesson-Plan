
<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use common\models\SectionScheduleSearch;
use yii\widgets\Pjax;
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
        <?= Html::a('Create Schedule', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
       'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        
        'columns' => [
        
           ['class' => 'yii\grid\SerialColumn'],
            

            'sub.sub_name',
            'subTimeStart.time',
            'subTimeEnd.time',
            'section0.sec_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
