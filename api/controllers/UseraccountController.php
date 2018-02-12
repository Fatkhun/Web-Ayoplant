<?php

namespace api\controllers;

use Yii;
use common\models\Useraccount;
use app\models\UseraccountSearch;
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
 * UseraccountController implements the CRUD actions for Useraccount model.
 */
class UseraccountController extends ActiveController
{
    public $modelClass = 'app\models\Useraccount';
    public $enableCsrfValidation = false;

    public function beforeAction($action)
    {
    
        Yii::$app->response->format = Response::FORMAT_JSON;
        return parent::beforeAction($action);
    }
    
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'authenticator' => [
                'class' => CompositeAuth::className(),
                'authMethods' => [
                    // HttpBearerAuth::className(),                    
                ]
            ],
            'contentNegotiator' => [
                'class' => ContentNegotiator::className(),
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                ]
            ],
        ];
    }
                                                                                                                           
    public function actionLogin(){
        $request = Yii::$app->request->bodyParams;
        
        $email = $request['email'];
        $password = $request['password'];

        $user = Useraccount::findOne([
            'email' => $email,
            'password' => $password
        ]);

        if (!$user) {
            return [
                "success" => false,
                "message" => "Akun tidak ditemukan"
            ];
        }else{
            return [
            "success" => true,
            "message" => "Login berhasil",
            "data" => $user
        ];} 

    }

    public function actionProfile(){
        
        $request = Yii::$app->request->bodyParams;
        $id_user = $request['id_user'];
        $profile = Useraccount::findOne([
            'id_user' => $id_user
        ]);
        
        $profile->full_name = $request['full_name'];
        $profile->hp = $request['hp'];
        $profile->country = $request['country'];
        $profile->save();
        if ($profile) {
            return [
                "success" => true,
                "message" => "Update berhasil",
                "data" => $profile
            ];
        }else {
            return [
                "success" => false,
                "message" => "Gagal update"
            ];
        }

        
    }

    public function actionRegister(){

        error_reporting(0);
        $request = Yii::$app->request->bodyParams;
        $userregister = new Useraccount();
        $userregister->full_name = $request['full_name'];
        $userregister->email = $request['email'];   
        $userregister->password = $request['password'];
        // $userregister->access_token = $request['access_token'];
        $userregister->auth_key = $request[md5($rand = substr(md5(microtime()),rand(0,25)))];
        $userregister->save();
        
        if ($userregister) {
                return [
                "success" => true,
                "message" => "Register berhasil",
                "data" => $userregister
            ];
        }else{
                return [
                    "success" => false,
                    "message" => "Gagal register",
                    "data" => $userregister->getErrors()
                ];
        }
        
    }

    public function save($runValidation = true, $attributeNames = null)
        {
            if ($this->getIsNewRecord()) {
                return $this->insert($runValidation, $attributeNames);
            } else {
                return $this->update($runValidation, $attributeNames) !== false;
            }
        }

    /**
     * Lists all Useraccount models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UseraccountSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Useraccount model.
     * @param integer $id
     * @return mixed
     */
    public function actionView()
    {
        return Yii::$app->user->identity;
    }

    /**
     * Creates a new Useraccount model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Useraccount();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_user]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Useraccount model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_user]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Useraccount model.
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
     * Finds the Useraccount model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Useraccount the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Useraccount::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
