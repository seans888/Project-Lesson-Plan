<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Schedule */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'sub.sub_name',
            'sub_time_start:datetime',
            'sub_time_end:datetime',
            'sec.sec_name',
            //'teach_id',
            'acadYear.School_Year',
        ],
    ]) ?>

</div>
