<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UseraccountSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Useraccounts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="useraccount-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Useraccount'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_user',
            'full_name',
            'password',
            'email:email',
            'hp',
            'auth_key:ntext',
            'country',
            'gbr_profile',
            [
                'class' => 'yii\grid\DataColumn',
                'header' => 'Picture',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img(Yii::$app->request->baseUrl.'/img-profile/'.$data->gbr_profile,['width'=>'100px']);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
