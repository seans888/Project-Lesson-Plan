<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'stud_id_num',
            'stud_fname',
            'stud_lname',
            'stud_mname',
            // 'home_number',
            // 'city_name',
            // 'province',
            // 'zip_code',
            // 'birthdate',
            // 'religion',
            // 'gender',
            // 'nationality',
            // 'email:email',
            // 'mothers_name',
            // 'fathers_name',
            // 'guardians_name',
            // 'mothers_contact_number',
            // 'fathers_contact_number',
            // 'guardians_contact_number',
            // 'birth_place',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
