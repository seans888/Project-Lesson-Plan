
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\subject;

/* @var $this yii\web\View */
/* @var $model common\models\Schedule */

$this->params['breadcrumbs'][] = ['label' => 'Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'sub.sub_name',
            'subTimeEnd.time',
            'subTimeStart.time',
            'teach.emp_lname',
            'acadYear.School_Year',
        
        ],
    ]) ?>

</div>
