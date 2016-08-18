<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AcademicYearPost */

$this->title = 'Update Academic Year Post: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Academic Year Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="academic-year-post-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
