<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pelanggan".
 *
 * @property integer $id
 * @property string $nama
 * @property integer $jenis_kendaraan
 * @property string $nopol
 * @property string $telpon
 */
class Pelanggan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pelanggan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'jenis_kendaraan', 'nopol', 'telpon'], 'required'],
            [['jenis_kendaraan'], 'integer'],
            [['nama'], 'string', 'max' => 30],
            [['nopol'], 'string', 'max' => 10],
            [['telpon'], 'string', 'max' => 13],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'jenis_kendaraan' => 'Jenis Kendaraan',
            'nopol' => 'Nopol',
            'telpon' => 'Telpon',
        ];
    }
}
