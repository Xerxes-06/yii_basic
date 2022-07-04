<?php

namespace app\models;

use Yii; 

/**
 * This is the model class for table "pembeli".
 *
 * @property int $id_pembeli
 * @property string $nama_pembeli
 * @property string $alamat
 * @property string $jenis_kelamin
 * @property int $id_barang
 * @property int $id_jenis
 * @property int $id_pesanan
 * @property int $id_transaksi
 *
 * @property Pembeli $barang
 * @property Pembeli[] $pembelis
 */
class Pembeli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembeli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pembeli', 'alamat', 'jenis_kelamin', 'id_barang', 'id_jenis', 'id_pesanan', 'id_transaksi'], 'required'],
            [['id_barang', 'id_jenis', 'id_pesanan', 'id_transaksi'], 'integer'],
            [['nama_pembeli', 'alamat', 'jenis_kelamin'], 'string', 'max' => 30],
            [['id_barang'], 'exist', 'skipOnError' => true, 'targetClass' => Pembeli::className(), 'targetAttribute' => ['id_barang' => 'id_barang']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pembeli' => 'Id Pembeli',
            'nama_pembeli' => 'Nama Pembeli',
            'alamat' => 'Alamat',
            'jenis_kelamin' => 'Jenis Kelamin',
            'id_barang' => 'Id Barang',
            'id_jenis' => 'Id Jenis',
            'id_pesanan' => 'Id Pesanan',
            'id_transaksi' => 'Id Transaksi',
        ];
    }

    /**
     * Gets query for [[Barang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarang()
    {
        return $this->hasOne(Barang::className(), ['id_barang' => 'id_barang']);
    }
    public function getJenis()
    {
        return $this->hasOne(Jenis::className(), ['id_jenis' => 'id_jenis']);
    } 
    public function getPesanan()
    {
        return $this->hasOne(Pesanan::className(), ['id_pesanan' => 'id_pesanan']);
    } 
    
    public function getTransaksi()
    {
        return $this->hasOne(Transaksi::className(), ['id_transaksi' => 'id_transaksi']);
    }

    /**
     * Gets query for [[Pembelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembelis()
    {
        return $this->hasMany(Pembeli::className(), ['id_barang' => 'id_barang']);
    }

}
