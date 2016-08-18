<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AcademicYearPost */

$this->title = 'Create Academic Year Post';
$this->params['breadcrumbs'][] = ['label' => 'Academic Year Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-year-post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
