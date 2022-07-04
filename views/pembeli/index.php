<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Pembeli;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PembeliSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembelis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembeli-index">

    <h1><?= Html::encode($this->title) ?></h1>
  
    <p>
        <?= Html::a('Create Pembeli', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pembeli',
            'nama_pembeli',
            'alamat',
            'jenis_kelamin',
            // 'id_barang',
            //'id_jenis',
            //'id_pesanan',
            //'id_transaksi',
            'barang.nama_barang',
            'jenis.nama_jenis',
            'pesanan.tanggal_pesan',
            'pesanan.jumlah_pesanan',
            'transaksi.kode_transaksi',
            'transaksi.jumlah_transaksi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pembeli $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pembeli' => $model->id_pembeli]);
                 }
            ],
        ],
    ]); ?>


</div>
