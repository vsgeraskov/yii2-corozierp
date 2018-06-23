<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "help_article".
 *
 * @property int $id_articl Уникальный ключ статьи
 * @property string $title Название статьи
 * @property string $content Текст статьи
 * @property int $date Дата публикации или изменения
 * @property int $category Категория статьи
 * @property int $status Статус статьи 1-опубликована 0-отключена
 * @property int $user_id Пользователь кто добавил или отредактировал
 */
class HelpArticle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'help_article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['date', 'category', 'status', 'user_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_articl' => 'Id Articl',
            'title' => 'Title',
            'content' => 'Content',
            'date' => 'Date',
            'category' => 'Category',
            'status' => 'Status',
            'user_id' => 'User ID',
        ];
    }
}
