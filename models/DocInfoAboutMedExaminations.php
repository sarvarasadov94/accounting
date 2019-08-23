<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_info_about_med_examinations".
 *
 * @property int $id
 * @property string $pass_date
 * @property string $comission_name
 * @property string $comission_comment
 * @property string $comission_date
 * @property string $tore_examination
 * @property string $tore_examination_date
 * @property int $record_card_id
 *
 * @property DocRecordCard $recordCard
 */
class DocInfoAboutMedExaminations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_info_about_med_examinations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pass_date', 'comission_date', 'tore_examination_date'], 'safe'],
            [['record_card_id'], 'required'],
            [['record_card_id'], 'default', 'value' => null],
            [['record_card_id'], 'integer'],
            [['comission_name'], 'string', 'max' => 200],
            [['comission_comment', 'tore_examination'], 'string', 'max' => 1000],
            [['record_card_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocRecordCard::className(), 'targetAttribute' => ['record_card_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pass_date' => Yii::t('main', 'Pass Date'),
            'comission_name' => Yii::t('main', 'Comission Name'),
            'comission_comment' => Yii::t('main', 'Comission Comment'),
            'comission_date' => Yii::t('main', 'Comission Date'),
            'tore_examination' => Yii::t('main', 'Tore Examination'),
            'tore_examination_date' => Yii::t('main', 'Tore Examination Date'),
            'record_card_id' => Yii::t('main', 'Record Card ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecordCard()
    {
        return $this->hasOne(DocRecordCard::className(), ['id' => 'record_card_id']);
    }
}
