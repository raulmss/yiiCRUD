<?php

namespace app\models;

use app\models\CadastroModel as DBuser;
use yii\db\ActiveRecord;

class User extends ActiveRecord implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

    public static function tableName()
    {
        return 'cadastro';
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        $user = DBuser::find($id)->one();

        if($user)
        {
            return new static($user);
        }
        return null;
    }

    /**
     * {@inheritdoc}
     */
  public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $user = DBuser::find()->where(['usuario'=>$username])->one();

        if($user){
            return new static($user);
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return null;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        $password = DBuser::find()->where(['senha'=>sha1($password)])->one();

        if($password){
            return ($password);
        }
        else
        return null;
    }
}
