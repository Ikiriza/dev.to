<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $author_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $status
 * @property string|null $tags
 * @property string|null $image_url
 *
 * @property User $author
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'author_id'], 'required'],
            [['content', 'status'], 'string'],
            [['author_id'], 'default', 'value' => null],
            [['author_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'tags', 'image_url'], 'string', 'max' => 255],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'author_id' => 'Author ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
            'tags' => 'Tags',
            'image_url' => 'Image Url',
        ];
    }

    /**
     * Gets query for [[Author]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::class, ['id' => 'author_id']);
    }
    
    
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'author_id']);
    }
}
