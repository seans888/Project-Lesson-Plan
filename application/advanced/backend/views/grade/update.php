<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Grade */

$this->title = 'Update Grade: ' . $model->acad_year_id;
$this->params['breadcrumbs'][] = ['label' => 'Grades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->acad_year_id, 'url' => ['view', 'id' => $model->acad_year_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="grade-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
