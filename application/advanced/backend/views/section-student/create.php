<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SectionStudent */

$this->title = 'Add Student to Section';
$this->params['breadcrumbs'][] = ['label' => 'Section Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-student-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
