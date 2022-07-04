<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id_transaksi
 * @property string $kode_transaksi
 * @property string $jumlah_transaksi
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_transaksi', 'jumlah_transaksi'], 'required'],
            [['kode_transaksi', 'jumlah_transaksi'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transaksi' => 'Id Transaksi',
            'kode_transaksi' => 'Kode Transaksi',
            'jumlah_transaksi' => 'Jumlah Transaksi',
        ];
    }
}
