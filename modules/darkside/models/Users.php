<?php

namespace app\modules\darkside\models;

use Yii;

/**
 * This is the model class for table "dvg73_users".
 *
 * @property string $id
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $registerDate
 * @property string $lastvisitDate
 * @property string $auth_key
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dvg73_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['registerDate', 'lastvisitDate'], 'safe'],
            [['auth_key'], 'required'],
            [['name', 'password', 'auth_key'], 'string', 'max' => 128],
            [['username', 'email'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'registerDate' => 'Register Date',
            'lastvisitDate' => 'Lastvisit Date',
            'auth_key' => 'Auth Key',
        ];
    }
}
