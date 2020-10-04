<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbuser".
 *
 * @property int $id_user
 * @property string $nama
 * @property string $username
 * @property string $password
 * @property string $status_user
 */
class TbUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbuser';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'username', 'password', 'status_user'], 'required'],
            [['nama', 'username', 'password'], 'string', 'max' => 255],
            [['status_user'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'nama' => 'Nama',
            'username' => 'Username',
            'password' => 'Password',
            'status_user' => 'Status User',
        ];
    }
}
