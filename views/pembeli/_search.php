<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PembeliSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembeli-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pembeli') ?>

    <?= $form->field($model, 'nama_pembeli') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'jenis_kelamin') ?>

    <?= $form->field($model, 'id_barang') ?>

    <?php // echo $form->field($model, 'id_jenis') ?>

    <?php // echo $form->field($model, 'id_pesanan') ?>

    <?php // echo $form->field($model, 'id_transaksi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
