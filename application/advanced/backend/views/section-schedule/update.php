<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SectionSchedule */

$this->title = 'Update Section Schedule: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Section Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="section-schedule-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
