<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property integer $id_transaksi
 * @property integer $id_pelanggan
 * @property integer $id_lokasi
 * @property string $waktu_pesan
 * @property string $waktu_masuk
 * @property string $waktu_keluar
 * @property integer $harga
 * @property integer $status
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pelanggan', 'id_lokasi', 'waktu_pesan', 'waktu_masuk', 'waktu_keluar', 'harga', 'status'], 'required'],
            [['id_pelanggan', 'id_lokasi', 'harga', 'status'], 'integer'],
            [['waktu_pesan', 'waktu_masuk', 'waktu_keluar'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_transaksi' => 'Id Transaksi',
            'id_pelanggan' => 'Id Pelanggan',
            'id_lokasi' => 'Id Lokasi',
            'waktu_pesan' => 'Waktu Pesan',
            'waktu_masuk' => 'Waktu Masuk',
            'waktu_keluar' => 'Waktu Keluar',
            'harga' => 'Harga',
            'status' => 'Status',
        ];
    }
}
