<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "harga".
 *
 * @property integer $id
 * @property integer $jenis_kendaraan
 * @property integer $harga
 * @property string $create_date
 * @property string $update_date
 * @property integer $status
 * @property integer $approval
 */
class Harga extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'harga';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'jenis_kendaraan', 'harga', 'create_date', 'update_date', 'status', 'approval'], 'required'],
            [['id', 'jenis_kendaraan', 'harga', 'status', 'approval'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis_kendaraan' => 'Jenis Kendaraan',
            'harga' => 'Harga',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
            'status' => 'Status',
            'approval' => 'Approval',
        ];
    }
}
