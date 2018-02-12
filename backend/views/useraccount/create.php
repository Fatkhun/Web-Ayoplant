<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Useraccount */

$this->title = Yii::t('app', 'Create Useraccount');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Useraccounts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="useraccount-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
