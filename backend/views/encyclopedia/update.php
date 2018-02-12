<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Encyclopedia */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Encyclopedia',
]) . ' ' . $model->id_pedia;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Encyclopedias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pedia, 'url' => ['view', 'id' => $model->id_pedia]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="encyclopedia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
