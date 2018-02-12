<?php

namespace backend\controllers;

use Yii;
use app\models\Plant;
use app\models\PlantSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PlantController implements the CRUD actions for Plant model.
 */
class PlantController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Plant models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PlantSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination = [
            'pageSize' => 4
        ];
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Plant model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Plant model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Plant();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $gambar = UploadedFile::getInstance($model, 'gbr_plant');
             
            if($model->validate()){
                $model->save();
                if (!empty($gambar)) {
                    $gambar->saveAs(Yii::getAlias('@backend/web/img-plant/') . $gambar->baseName .'.' . $gambar->extension);
                    $model->gbr_plant = $gambar->baseName . '.' . $gambar->extension;
                    $model->save(FALSE);
                }
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id_plant]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Plant model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImage = $model->gbr_plant;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $gambar = UploadedFile::getInstance($model, 'gbr_plant');
            if (isset($gambar)) {
                 $model->gbr_plant = $gambar->baseName .'.'.$gambar->extension;
             }else{
                $model->gbr_plant = $oldImage;
             } 
            if($model->validate()){
                $model->save();
                if (!empty($gambar)) {
                    $gambar->saveAs(Yii::getAlias('@backend/web/img-plant/') . $gambar->baseName .'.' . $gambar->extension);
                    $model->gbr_plant = $gambar->baseName . '.' . $gambar->extension;
                    $model->save(FALSE);
                }
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id_plant]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Plant model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Plant model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Plant the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Plant::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
