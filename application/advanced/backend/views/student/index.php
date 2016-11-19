<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
        <?= Html::a('Add Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
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
            'gender0.gender',
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
</div>
