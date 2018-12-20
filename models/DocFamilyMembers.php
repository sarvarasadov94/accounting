<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_family_members".
 *
 * @property int $id
 * @property int $relative_type_id
 * @property string $first_name
 * @property string $last_name
 * @property string $patronymic
 * @property int $year_of_birth
 * @property string $address
 * @property string $work_place
 * @property int $category_id
 * @property int $conscript_id
 * @property int $military_service_card_id
 * @property int $relative_group_id
 *
 * @property DocConscript $conscript
 * @property DocMilitaryServiceCard $militaryServiceCard
 * @property EntCategory $category
 * @property EnumRelativeGroup $relativeGroup
 * @property EnumRelativeType $relativeType
 */
class DocFamilyMembers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_family_members';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['relative_type_id', 'year_of_birth', 'category_id', 'conscript_id', 'military_service_card_id', 'relative_group_id'], 'default', 'value' => null],
            [['relative_type_id', 'year_of_birth', 'category_id', 'conscript_id', 'military_service_card_id', 'relative_group_id'], 'integer'],
            [['first_name', 'last_name', 'patronymic'], 'string', 'max' => 200],
            [['address', 'work_place'], 'string', 'max' => 1000],
            [['conscript_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocConscript::className(), 'targetAttribute' => ['conscript_id' => 'id']],
            [['military_service_card_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocMilitaryServiceCard::className(), 'targetAttribute' => ['military_service_card_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['relative_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => EnumRelativeGroup::className(), 'targetAttribute' => ['relative_group_id' => 'id']],
            [['relative_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => EnumRelativeType::className(), 'targetAttribute' => ['relative_type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'relative_type_id' => 'Relative Type ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'patronymic' => 'Patronymic',
            'year_of_birth' => 'Year Of Birth',
            'address' => 'Address',
            'work_place' => 'Work Place',
            'category_id' => 'Category ID',
            'conscript_id' => 'Conscript ID',
            'military_service_card_id' => 'Military Service Card ID',
            'relative_group_id' => 'Relative Group ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConscript()
    {
        return $this->hasOne(DocConscript::className(), ['id' => 'conscript_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMilitaryServiceCard()
    {
        return $this->hasOne(DocMilitaryServiceCard::className(), ['id' => 'military_service_card_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(EntCategory::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRelativeGroup()
    {
        return $this->hasOne(EnumRelativeGroup::className(), ['id' => 'relative_group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRelativeType()
    {
        return $this->hasOne(EnumRelativeType::className(), ['id' => 'relative_type_id']);
    }
}
