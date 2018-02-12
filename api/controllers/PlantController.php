<?php

namespace api\controllers;

use Yii;
use app\models\Plant;
use app\models\PlantSearch;
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
 * PlantController implements the CRUD actions for Plant model.
 */
class PlantController extends ActiveController
{
    public $modelClass = 'app\models\Plant';
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

    public function beforeAction($action)
    {
    
        Yii::$app->response->format = Response::FORMAT_JSON;
        return parent::beforeAction($action);
    }

    /**
     * Lists all Plant models.
     * @return mixed
     */
    public function actionIndex()
    {
        $plant = Plant::find()->all();
        return $plant;
        
        $searchModel = new PlantSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

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

    public function actionAddplant(){
        $request = Yii::$app->request->bodyParams;

        $addplant = new Plant();
        $addplant->name = $request['name'];
        $addplant->type = $request['type'];
        $addplant->save();

        if ($addplant) {
                return [
                "success" => true,
                "message" => "Tambah tanaman berhasil",
                "data" => $addplant
            ];
        }else{
                return [
                    "success" => false,
                    "message" => "Gagal tambah tanaman",
                    "data" => $addplant->getErrors()
                ];
        }

    }
    public function actionPlant(){
        $request = Yii::$app->request->bodyParams;
        
        $name = $request['name'];
        $type = $request['type'];
        $ph = $request['ph'];
        $temp = $request['temp'];

        $plant = Plant::findOne([
            'name' => $name,
            'type' => $type,
            'ph' => $ph,
            'temp' => $temp
        ]);

        if (!$plant) {
            return [
                "success" => false,
                "message" => "Data tidak ditemukan"
            ];
        }
            return [
            "success" => true,
            "message" => "success",
            "data" => $plant
        ];

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

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
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
