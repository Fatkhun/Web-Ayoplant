<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Useraccount */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Useraccount',
]) . $model->id_user;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Useraccounts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_user, 'url' => ['view', 'id' => $model->id_user]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="useraccount-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
