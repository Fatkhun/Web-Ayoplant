<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Plant */

$this->title = Yii::t('app', 'Create Plant');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Plants'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plant-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
