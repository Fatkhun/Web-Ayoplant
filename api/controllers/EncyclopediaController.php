<?php

namespace api\controllers;

use Yii;
use app\models\Encyclopedia;
use app\models\EncyclopediaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\filters\ContentNegotiator;
use yii\web\Response;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBearerAuth;
use League\Fractal;
use League\Fractal\Manager;
use yii\rest\ActiveController;

/**
 * EncyclopediaController implements the CRUD actions for Encyclopedia model.
 */
class EncyclopediaController extends ActiveController
{
    public $modelClass = 'app\models\Encyclopedia';
    public $enableCsrfValidation = false;
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'authMethods' => [
                'class' => CompositeAuth::className(),
                'authMethods' => [
                    // HttpBearerAuth::className(),                    
                ]
            ],
            'contentNegotiator' => [
                'class' => ContentNegotiator::className(),
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                ],
            ],
        ];
    }

    public function actionEncy(){
        $request = Yii::$app->request->bodyParams;
        
        $name_pedia = $request['name_pedia'];
        $category = $request['category'];

        $ency = Encyclopedia::findOne([
            'name_pedia' => $name_pedia,
            'category' => $category
        ]);

        if (!$ency) {
            return [
                "success" => false,
                "message" => "Data tidak ditemukan"
            ];
        }
            return [
            "success" => true,
            "message" => "success",
            "data" => $ency
        ];
    }

    /**
     * Lists all Encyclopedia models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EncyclopediaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Encyclopedia model.
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
     * Creates a new Encyclopedia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Encyclopedia();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_pedia]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Encyclopedia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_pedia]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Encyclopedia model.
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
     * Finds the Encyclopedia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Encyclopedia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Encyclopedia::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
