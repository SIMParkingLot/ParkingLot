<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kendaraan".
 *
 * @property integer $id
 * @property string $nama_kendaraan
 */
class Kendaraan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kendaraan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_kendaraan'], 'required'],
            [['nama_kendaraan'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_kendaraan' => 'Nama Kendaraan',
        ];
    }
}
