<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
/* @var $searchModel common\models\SectionStudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Class List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-student-index">    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sectionStudent.stud_fname',
            'sectionStudent.stud_lname',
            
        ],
    ]); ?>
</div>
