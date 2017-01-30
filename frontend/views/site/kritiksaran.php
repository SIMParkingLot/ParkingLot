<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Kritik & Saran';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-contact">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-12">
		<div class="col-lg-12" style="background-color:#f5f5f5;"><h4 align="center">Apa Kritik Dan Saran Anda?</h4><p align="center">Sampaikan kritik dan saran anda dengan mengisi form ini:</p>
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
				
                <div class="col-xs-6"><?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?></div>

                <div class="col-xs-6"><?= $form->field($model, 'email') ?></div><br>

                <div class="col-xs-12"><?= $form->field($model, 'body')->textarea(['rows' => 2]) ?></div>
				
                <div class="form-group col-xs-12">
                    <?= Html::submitButton('Post It', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
			
		</div>
			
		<div class="col-xs-12"><br><h4 align="center">------ Kritik & Saran anda sangat penting bagi kami ------</h4><br></div>
		
		<b>Bagas Fajar - bugsdev@it.student.pens.ac.id</b><br>
		Saya berharap masa toleransi untuk pembatalan transaksi dapat diperpanjang. Terima kasih.
		<div class="col-lg-12">
		<b>Administrator</b><br>
		Terima kasih atas sarannya. Saat ini pihak managemen memberikan waktu toleransi 1 jam sebelum pemesanan dibatalkan.
		</div><br><br>
		</div>
    </div>
</div>
