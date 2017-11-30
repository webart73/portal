<?php

namespace app\modules\darkside\models;


/**
 * This is the model class for table "dvg73_users".
 *
 * @property string $id
 * @property integer $userGroup
 * @property string $userName
 * @property string $login
 * @property string $password
 * @property string $userPhone
 * @property string $userEmail
 * @property integer $activation
 * @property integer $block
 * @property string $registerDate
 * @property string $lastvisitDate
 * @property string $authKey
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
            [['userGroup', 'activation', 'block'], 'integer'],
            [['registerDate', 'lastvisitDate'], 'safe'],
            [['userName', 'password', 'authKey'], 'string', 'max' => 128],
            [['login', 'userEmail'], 'string', 'max' => 32],
            [['userPhone'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userGroup' => 'User Group',
            'userName' => 'User Name',
            'login' => 'Login',
            'password' => 'Password',
            'userPhone' => 'User Phone',
            'userEmail' => 'User Email',
            'activation' => 'Activation',
            'block' => 'Block',
            'registerDate' => 'Register Date',
            'lastvisitDate' => 'Lastvisit Date',
            'authKey' => 'Auth Key',
        ];
    }
}
