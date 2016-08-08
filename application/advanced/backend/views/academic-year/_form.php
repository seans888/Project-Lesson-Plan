<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AcademicYear */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="academic-year-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'acad_year_start')->textInput() ?>

    <?= $form->field($model, 'acad_year_end')->textInput() ?>

    <?= $form->field($model, 'quart1_start_period')->textInput() ?>

    <?= $form->field($model, 'quart1_end_period')->textInput() ?>

    <?= $form->field($model, 'quart2_start_period')->textInput() ?>

    <?= $form->field($model, 'quart2_end_period')->textInput() ?>

    <?= $form->field($model, 'quart3_start_period')->textInput() ?>

    <?= $form->field($model, 'quart3_end_period')->textInput() ?>

    <?= $form->field($model, 'quart4_start_period')->textInput() ?>

    <?= $form->field($model, 'quart4_end_period')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
