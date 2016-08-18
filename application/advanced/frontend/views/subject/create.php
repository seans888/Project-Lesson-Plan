<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SubjectPost */

$this->title = 'Create Subject Post';
$this->params['breadcrumbs'][] = ['label' => 'Subject Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
