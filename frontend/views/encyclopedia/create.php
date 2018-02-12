<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Encyclopedia */

$this->title = Yii::t('app', 'Create Encyclopedia');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Encyclopedias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encyclopedia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
