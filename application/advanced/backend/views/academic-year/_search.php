<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AcademicYearSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="academic-year-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'acad_year_start') ?>

    <?= $form->field($model, 'acad_year_end') ?>

    <?= $form->field($model, 'quart1_start_period') ?>

    <?= $form->field($model, 'quart1_end_period') ?>

    <?php // echo $form->field($model, 'quart2_start_period') ?>

    <?php // echo $form->field($model, 'quart2_end_period') ?>

    <?php // echo $form->field($model, 'quart3_start_period') ?>

    <?php // echo $form->field($model, 'quart3_end_period') ?>

    <?php // echo $form->field($model, 'quart4_start_period') ?>

    <?php // echo $form->field($model, 'quart4_end_period') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
