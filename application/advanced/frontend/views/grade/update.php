<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\GradePost */

$this->title = 'Update Grade Post: ' . $model->acad_year_id;
$this->params['breadcrumbs'][] = ['label' => 'Grade Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->acad_year_id, 'url' => ['view', 'id' => $model->acad_year_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="grade-post-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
