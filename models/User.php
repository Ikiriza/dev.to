<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string|null $created_at
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'username', 'email', 'password'], 'required'],
            [['created_at'], 'safe'],
            [['first_name', 'last_name', 'username'], 'string', 'max' => 50],
            [['email', 'password'], 'string', 'max' => 100],
            [['profile_picture'], 'file'] // Max size 1MB
        ];
    }


    public function upload()
{
    if ($this->validate()) {
        // Save the uploaded file to the 'uploads/' directory
        $filePath = Yii::getAlias('@webroot/uploads/') . $this->profile_picture->baseName . '.' . $this->profile_picture->extension;
        if ($this->profile_picture->saveAs($filePath)) {
            return true;
        }
    }
    return false;
}
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'username' => 'User Name',
            'email' => 'Email',
            'password' => 'Password',
            'created_at' => 'Created At',
            'profile_picture' => 'Profile Picture',
        ];
    }

    /**
 * @property string|null $profile_picture_path // Ensure this matches your database schema
 */
    public $profile_picture_path; // Add this if you haven't already


    
    public $profile_picture; // Add this line for the file upload


        /**
     * {@inheritdoc}
     */
    // public static function findIdentity($id)
    // {
    //     // return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    // }
    public static function findIdentity($id)
    {
        return static::findOne($id); // Find a user by their ID
    }



        /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        // foreach (self::$users as $user) {
        //     if ($user['accessToken'] === $token) {
        //         return new static($user);
        //     }
        // }

        return null;
    }
    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    // public static function findByUsername($username)
    // {
    //     // foreach (self::$users as $user) {
    //     //     if (strcasecmp($user['username'], $username) === 0) {
    //     //         return new static($user);
    //     //     }
    //     // }

    //     return null;
    // }
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);  // Query based on 'username'
    }


    public function getUsername() {
        return $this->username; // or $this->name depending on your column
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

    // public function getAuthKey()
    // {
    //     return $this->authKey;
    // }

    // /**
    //  * {@inheritdoc}
    //  */

    // public function validateAuthKey($authKey)
    // {
    //     return $this->authKey === $authKey;
    // }
    public function getAuthKey()
    {
        return 'test_auth_key';  // Return a static auth key
    }

    public function validateAuthKey($authKey)
    {
        return $authKey === 'test_auth_key';  // Validate against a static value
    }


    

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    // public function validatePassword($password)
    // {
    //     return $this->password === $password;
    // }
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password); // Use Yii's password validation
    }
}