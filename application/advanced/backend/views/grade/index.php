<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GradeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Grades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grade-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>

        <?= Html::button('Add Grade', ['value'=>Url::to('index.php?r=grade/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
    </p>

     <?php
    Modal::begin([
        'header'=>'<h4>Grade</h4>',
        'id' => 'modal',
        'size' => 'modal-lg',
        ]);

     echo "<div id='modalContent'></div>";
     Modal::end();
     ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'acadYear.School_Year',
             'quarter0.quarter',
            'sub.sub_name',
           'stud.stud_lname',
            'stud.stud_fname',
            'grade',
            //'emp_id',
            //'stud.stud_lname',
            //'stud.stud_fname',
            //'stud_id',
        
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
