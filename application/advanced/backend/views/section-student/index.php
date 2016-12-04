<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\SectionStudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Section Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-student-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  <p>
        <?= Html::button('Create Section Student', ['value'=>Url::to('index.php?r=section-student/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
    </p>

<?php Pjax::begin(); ?>
 <?php
    Modal::begin([
        'header'=>'<h4>Section Students</h4>',
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
             'sectionName.sec_name',
              'sectionStudent.stud_fname',
            'sectionStudent.stud_lname',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
