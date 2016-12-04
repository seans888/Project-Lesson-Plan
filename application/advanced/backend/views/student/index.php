<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;


/* @var $this yii\web\View */
/* @var $searchModel common\models\StudentPost */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>

      <?= Html::button('Add Student', ['value'=>Url::to('index.php?r=student/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>

    </p>

    
 <?php
    Modal::begin([
        'header'=>'<h4>Student</h4>',
        'id' => 'modal',
        'size' => 'modal-lg',
        ]);

     echo "<div id='modalContent'></div>";
     Modal::end();
     ?>    
     <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'stud_id_num',
            'stud_fname',
            'stud_lname',
            'stud_mname',
            //'sectionStudents.section_student',
            //'gender0.gender',
            //'home_number',
            //'cityName.city_name',
            //'province0.province',
            //'zip_code',
            //'birthdate',
            //'birth_place',
            //'religion',
            //'nationality',
            //'email:email',
            //'mothers_name',
            //'mothers_contact_number',
            //'fathers_name',
            //'fathers_contact_number',
            //'guardians_name',
            //'guardians_contact_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
