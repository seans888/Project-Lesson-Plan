<?php

namespace backend\controllers;

use Yii;
use common\models\Quarter;
use common\models\QuarterSeach;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHTTPException;

/**
 * QuarterController implements the CRUD actions for Quarter model.
 */
class QuarterController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Quarter models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(yii::$app->user->can('add quarter')){
            $searchModel = new QuarterSeach();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
        }else
        {
            throw new NotFoundHttpException;
        }
    }

    /**
     * Displays a single Quarter model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        if(yii::$app->user->can('add quarter')){
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);}
        else{
            throw new NotFoundHttpException;
        }
    }

    /**
     * Creates a new Quarter model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(yii::$app->user->can('add quarter')){
        $model = new Quarter();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }else{
        throw new NotFoundHttpException;
    }
    }

    /**
     * Updates an existing Quarter model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if(yii::$app->user->can('add quarter')){
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }else{
        throw new NotFoundHttpException;
    }
    }

    /**
     * Deletes an existing Quarter model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if(yii::$app->user->can('add quarter')){
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }else{
        throw new NotFoundHttpException;
    }
    }

    /**
     * Finds the Quarter model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Quarter the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Quarter::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
