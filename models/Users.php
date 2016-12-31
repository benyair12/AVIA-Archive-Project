<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $account_num
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $phone
 * @property string $email
 * @property string $password
 * @property string $auth_key
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'username', 'phone', 'email', 'password', 'auth_key'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'account_num' => 'Account Num',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'username' => 'Username',
            'phone' => 'Phone',
            'email' => 'Email',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
        ];
    }
}
