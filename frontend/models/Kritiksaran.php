<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kritiksaran".
 *
 * @property integer $id
 * @property string $nama
 * @property string $email
 * @property string $body
 * @property string $waktu
 */
class Kritiksaran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kritiksaran';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nama', 'email', 'body', 'waktu'], 'required'],
            [['id'], 'integer'],
            [['body'], 'string'],
            [['waktu'], 'safe'],
            [['nama', 'email'], 'string', 'max' => 50],
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
            'email' => 'Email',
            'body' => 'Body',
            'waktu' => 'Waktu',
        ];
    }
}
