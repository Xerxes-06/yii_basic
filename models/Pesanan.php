<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pesanan".
 *
 * @property int $id_pesanan
 * @property string $tanggal_pesan
 * @property string $jumlah_pesanan
 */
class Pesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal_pesan', 'jumlah_pesanan'], 'required'],
            [['tanggal_pesan', 'jumlah_pesanan'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pesanan' => 'Id Pesanan',
            'tanggal_pesan' => 'Tanggal Pesan',
            'jumlah_pesanan' => 'Jumlah Pesanan',
        ];
    }
}
