<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SectionSchedule */

$this->title = 'Create Section Schedule';
$this->params['breadcrumbs'][] = ['label' => 'Section Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-schedule-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
