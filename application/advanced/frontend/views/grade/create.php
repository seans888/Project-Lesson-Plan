<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\GradePost */

$this->title = 'Create Grade Post';
$this->params['breadcrumbs'][] = ['label' => 'Grade Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grade-post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
