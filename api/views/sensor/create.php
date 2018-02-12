<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sensor */

$this->title = Yii::t('app', 'Create Sensor');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sensors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sensor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
