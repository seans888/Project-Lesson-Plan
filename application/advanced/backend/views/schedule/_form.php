<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Subject;
use common\models\Section;
use common\models\AcademicYear

/* @var $this yii\web\View */
/* @var $model common\models\Schedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-form">

    <?php $form = ActiveForm::begin(); ?>


     <?= $form->field($model, 'sub_id')->dropDownList(
        ArrayHelper::map(Subject::find()->all(),'id','sub_name'),
        ['prompt' => 'Select Subject']
        ) ?>

    <?= $form->field($model, 'sec_id')->dropDownList(
        ArrayHelper::map(Section::find()->all(),'id','sec_name'),
        ['prompt' => 'Select Section']
        ) ?>

     <?= $form->field($model, 'acad_year_id')->dropDownList(
        ArrayHelper::map(AcademicYear::find()->all(),'id','School_Year'),
        ['prompt' => 'Select Academic Year']
        ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
