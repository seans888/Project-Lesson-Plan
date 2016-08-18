<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SchedPost */

$this->title = 'Create Sched Post';
$this->params['breadcrumbs'][] = ['label' => 'Sched Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sched-post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
