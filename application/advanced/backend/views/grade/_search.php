<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\GradeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grade-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'acad_year_id') ?>

    <?= $form->field($model, 'grade') ?>

    <?= $form->field($model, 'stud_id') ?>

    <?= $form->field($model, 'emp_id') ?>

    <?= $form->field($model, 'sub_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>