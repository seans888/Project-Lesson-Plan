<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\EmployeePost */

$this->title = 'Create Employee Post';
$this->params['breadcrumbs'][] = ['label' => 'Employee Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
