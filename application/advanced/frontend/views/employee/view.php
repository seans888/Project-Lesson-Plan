<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Employee */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-view">

    <h1><?= Html::encode($this->title) ?></h1>

  

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'emp_id_num',
            'empJob.job_description',
            'emp_fname',
            'emp_lname',
            'emp_mname',
        ],
    ]) ?>

</div>
