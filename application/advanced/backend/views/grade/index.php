<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GradeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grade-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Grades', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'acadYear.School_Year',
<<<<<<< HEAD
            'stud_id',
            'emp_id',
            'sub_id',
=======
            'stud.stud_lname',
            'stud.stud_fname',
            //'stud_id',
            //'emp_id',
            'sub.sub_name',
>>>>>>> a5f0003cee29df763bf8e251733535bedd689285
            'grade',
            // 'quarter',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
