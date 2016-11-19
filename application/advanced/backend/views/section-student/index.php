<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
        <?= Html::a('Create Section Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'section_name',
            'section_student',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
