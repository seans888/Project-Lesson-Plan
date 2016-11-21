<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\AcademicYear;
use common\models\Subject;

/* @var $this yii\web\View */
/* @var $model common\models\Schedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-form">

    <?php $form = ActiveForm::begin(); ?>

      <?= $form->field($model, 'sub_id')->dropDownList(
        ArrayHelper::map(Subject::find()->all(),'id','sub_name'),
        ['prompt' => 'Choose Subject']
        ) ?>

    <?= $form->field($model, 'sub_time_start')->textInput() ?>

    <?= $form->field($model, 'sub_time_end')->textInput() ?>

    <?= $form->field($model, 'teach_id')->textInput() ?>


        <?= $form->field($model, 'acad_year_id')->dropDownList(
        ArrayHelper::map(AcademicYear::find()->all(),'id','School_Year'),
        ['prompt' => 'Choose Academic Year']
        ) ?> 

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
