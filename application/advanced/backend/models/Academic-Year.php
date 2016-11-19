<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AcademicYear */
/* @var $form ActiveForm */
?>
<div class="Academic-Year">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'School_Year') ?>
        <?= $form->field($model, 'acad_year_start') ?>
        <?= $form->field($model, 'acad_year_end') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Academic-Year -->
