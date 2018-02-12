<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EncyclopediaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="encyclopedia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pedia') ?>

    <?= $form->field($model, 'name_pedia') ?>

    <?= $form->field($model, 'category') ?>

    <?= $form->field($model, 'article') ?>

    <?= $form->field($model, 'ph_pedia') ?>

    <?php $form->field($model, 'temp_pedia') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
