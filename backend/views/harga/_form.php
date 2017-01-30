<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Harga */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="harga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'jenis_kendaraan')->textInput() ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'approval')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
