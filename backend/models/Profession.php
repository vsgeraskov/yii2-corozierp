<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profession".
 *
 * @property int $id_prof Уникальный ключ
 * @property string $name Профессия
 * @property int $code Код профессии
 */
class Profession extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profession';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['code'], 'integer'],
            [['name'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_prof' => 'Id',
            'name' => 'Профессия',
            'code' => 'Код по сборнику',
        ];
    }
}
