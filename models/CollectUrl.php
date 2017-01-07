<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "collect_url".
 *
 * @property string $id
 * @property string $url
 * @property integer $is_collect
 * @property string $create_time
 * @property string $collect_time
 */
class CollectUrl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'collect_url';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url', 'is_collect', 'create_time', 'collect_time'], 'required'],
            [['is_collect', 'create_time', 'collect_time'], 'integer'],
            [['url'], 'string', 'max' => 625],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '主键id'),
            'url' => Yii::t('app', '采集的url'),
            'is_collect' => Yii::t('app', '是否已经采集'),
            'create_time' => Yii::t('app', '生成时间'),
            'collect_time' => Yii::t('app', '采集时间'),
        ];
    }
}
