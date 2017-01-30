<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "map".
 *
 * @property integer $id
 * @property string $nama
 * @property integer $status
 * @property integer $approval
 */
class Map extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'map';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'status', 'approval'], 'required'],
            [['status', 'approval'], 'integer'],
            [['nama'], 'string', 'max' => 30],
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
            'status' => 'Status',
            'approval' => 'Approval',
        ];
    }
}
