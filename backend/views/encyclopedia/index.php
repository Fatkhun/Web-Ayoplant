<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EncyclopediaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Encyclopedias');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encyclopedia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Encyclopedia'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pedia',
            'name_pedia',
            'category',
            'article:ntext',
            'ph_pedia',
            'temp_pedia',
            'gbr_ency',
            [
                'class' => 'yii\grid\DataColumn',
                'header' => 'Picture',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img(Yii::$app->request->baseUrl.'/img-ency/'.$data->gbr_ency,['width'=>'100px']);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
