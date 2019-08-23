<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doc_commission_results".
 *
 * @property int $id
 * @property string $protocol_number
 * @property string $protocol_date
 * @property string $height
 * @property string $weight
 * @property string $chest_volume
 * @property string $spirometry
 * @property int $restriction_degree_id
 *  *
 * @property int $dermatolog_validity_degree_id
 * @property string $dermatolog_validity_comment
 * @property int $dermatolog_restriction_degree_id
 * @property string $dermatolog_restriction_comment
 *
 * @property int $xirurg_validity_degree_id
 * @property string $xirurg_validity_comment
 * @property int $xirurg_restriction_degree_id
 * @property string $xirurg_restriction_comment
 *
 * @property int $terapevt_validity_degree_id
 * @property string $terapevt_validity_comment
 * @property int $terapevt_restriction_degree_id
 * @property string $terapevt_restriction_comment
 *
 * @property int $flyuro_validity_degree_id
 * @property string $flyuro_validity_comment
 * @property int $flyuro_restriction_degree_id
 * @property string $flyuro_restriction_comment
 *
 * @property int $nevro_validity_degree_id
 * @property string $nevro_validity_comment
 * @property int $nevro_restriction_degree_id
 * @property string $nevro_restriction_comment
 *
 * @property int $psix_validity_degree_id
 * @property string $psix_validity_comment
 * @property int $psix_restriction_degree_id
 * @property string $psix_restriction_comment
 *
 * @property int $okulist_validity_degree_id
 * @property string $okulist_validity_comment
 * @property int $okulist_restriction_degree_id
 * @property string $okulist_restriction_comment
 *
 * @property int $oto_validity_degree_id
 * @property string $oto_validity_comment
 * @property int $oto_restriction_degree_id
 * @property string $oto_restriction_comment
 *
 * @property int $stom_validity_degree_id
 * @property string $stom_validity_comment
 * @property int $stom_restriction_degree_id
 * @property string $stom_restriction_comment
 *
 * @property int $registered_ond
 * @property string $registered_ond_reason
 * @property string $suitable_for_military_service
 * @property string $suitable_for_military_service_vdv
 * @property string $intended_for_vs
 * @property string $unsuitable_in_peace_time
 * @property string $unsuitable_with_exception
 * @property string $send_for_treatment
 * @property string $provide_reprieve
 * @property string $enddate_of_reprieve
 * @property string $appearance_date_to_send
 * @property string $commission_chairman
 * @property string $commission_members
 * @property string $head_of_dep
 * @property string $representative_nuroniy
 * @property string $representative_kamolot
 * @property string $representative_maxalla
 * @property string $representative1
 * @property string $representative2
 * @property string $senior_doctor
 * @property int $conscript_id
 *
 * @property DocConscript $conscript
 * @property EntRestrictionDegree $restrictionDegree
 */
class DocCommissionResults extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doc_commission_results';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['protocol_date', 'enddate_of_reprieve', 'appearance_date_to_send'], 'safe'],
            [['restriction_degree_id', 'registered_ond', 'conscript_id','dermatolog_validity_degree_id', 'dermatolog_restriction_degree_id', 'xirurg_validity_degree_id', 'xirurg_restriction_degree_id', 'terapevt_validity_degree_id', 'terapevt_restriction_degree_id', 'flyuro_validity_degree_id', 'flyuro_restriction_degree_id', 'nevro_validity_degree_id', 'nevro_restriction_degree_id', 'psix_validity_degree_id', 'psix_restriction_degree_id', 'okulist_validity_degree_id', 'okulist_restriction_degree_id', 'oto_validity_degree_id', 'oto_restriction_degree_id', 'stom_validity_degree_id', 'stom_restriction_degree_id'], 'default', 'value' => null],
            [['restriction_degree_id', 'registered_ond', 'conscript_id','dermatolog_validity_degree_id', 'dermatolog_restriction_degree_id', 'xirurg_validity_degree_id', 'xirurg_restriction_degree_id', 'terapevt_validity_degree_id', 'terapevt_restriction_degree_id', 'flyuro_validity_degree_id', 'flyuro_restriction_degree_id', 'nevro_validity_degree_id', 'nevro_restriction_degree_id', 'psix_validity_degree_id', 'psix_restriction_degree_id', 'okulist_validity_degree_id', 'okulist_restriction_degree_id', 'oto_validity_degree_id', 'oto_restriction_degree_id', 'stom_validity_degree_id', 'stom_restriction_degree_id'], 'integer'],
            [['conscript_id'], 'required'],
            [['dermatolog_validity_comment', 'dermatolog_restriction_comment', 'xirurg_validity_comment', 'xirurg_restriction_comment', 'terapevt_validity_comment', 'terapevt_restriction_comment', 'flyuro_validity_comment', 'flyuro_restriction_comment', 'nevro_validity_comment', 'nevro_restriction_comment', 'psix_validity_comment', 'psix_restriction_comment', 'okulist_validity_comment', 'okulist_restriction_comment', 'oto_validity_comment', 'oto_restriction_comment', 'stom_validity_comment', 'stom_restriction_comment'], 'string', 'max' => 255],
            [['protocol_number', 'height', 'weight', 'chest_volume', 'spirometry', 'registered_ond_reason', 'suitable_for_military_service', 'suitable_for_military_service_vdv', 'intended_for_vs', 'unsuitable_in_peace_time', 'unsuitable_with_exception', 'send_for_treatment', 'provide_reprieve', 'commission_chairman', 'commission_members', 'head_of_dep', 'representative_nuroniy', 'representative_kamolot', 'representative_maxalla', 'representative1', 'representative2', 'senior_doctor'], 'string', 'max' => 1000],
            [['conscript_id'], 'exist', 'skipOnError' => true, 'targetClass' => DocConscript::className(), 'targetAttribute' => ['conscript_id' => 'id']],
            [['restriction_degree_id'], 'exist', 'skipOnError' => true, 'targetClass' => EntRestrictionDegree::className(), 'targetAttribute' => ['restriction_degree_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'protocol_number' => Yii::t('main', 'Protocol Number'),
            'protocol_date' => Yii::t('main', 'Protocol Date'),
            'height' => Yii::t('main', 'Height'),
            'weight' => Yii::t('main', 'Weight'),
            'chest_volume' => Yii::t('main', 'Chest Volume'),
            'spirometry' => Yii::t('main', 'Spirometry'),
            'restriction_degree_id' => Yii::t('main', 'Restriction Degree ID'),
            'dermatolog_validity_comment' => Yii::t('main', 'dermatolog_validity_comment'),
            'dermatolog_restriction_comment' => Yii::t('main', 'dermatolog_restriction_comment'),
            'xirurg_validity_comment' => Yii::t('main', 'xirurg_validity_comment'),
            'xirurg_restriction_comment' => Yii::t('main', 'xirurg_restriction_comment'),
            'terapevt_validity_comment' => Yii::t('main', 'terapevt_validity_comment'),
            'terapevt_restriction_comment' => Yii::t('main', 'terapevt_restriction_comment'),
            'flyuro_validity_comment' => Yii::t('main', 'flyuro_validity_comment'),
            'flyuro_restriction_comment' => Yii::t('main', 'flyuro_restriction_comment'),
            'nevro_validity_comment' => Yii::t('main', 'nevro_validity_comment'),
            'nevro_restriction_comment' => Yii::t('main', 'nevro_restriction_comment'),
            'psix_validity_comment' => Yii::t('main', 'psix_validity_comment'),
            'psix_restriction_comment' => Yii::t('main', 'psix_restriction_comment'),
            'okulist_validity_comment' => Yii::t('main', 'okulist_validity_comment'),
            'okulist_restriction_comment' => Yii::t('main', 'okulist_restriction_comment'),
            'oto_validity_comment' => Yii::t('main', 'oto_validity_comment'),
            'oto_restriction_comment' => Yii::t('main', 'oto_restriction_comment'),
            'stom_validity_comment' => Yii::t('main', 'stom_validity_comment'),
            'stom_restriction_comment' => Yii::t('main', 'stom_restriction_comment'),
            'dermatolog_validity_degree_id' => Yii::t('main', 'dermatolog_validity_degree_id'),
            'dermatolog_restriction_degree_id' => Yii::t('main', 'dermatolog_restriction_degree_id'),
            'xirurg_validity_degree_id' => Yii::t('main', 'xirurg_validity_degree_id'),
            'xirurg_restriction_degree_id' => Yii::t('main', 'xirurg_restriction_degree_id'),
            'terapevt_validity_degree_id' => Yii::t('main', 'terapevt_validity_degree_id'),
            'terapevt_restriction_degree_id' => Yii::t('main', 'terapevt_restriction_degree_id'),
            'flyuro_validity_degree_id' => Yii::t('main', 'flyuro_validity_degree_id'),
            'flyuro_restriction_degree_id' => Yii::t('main', 'flyuro_restriction_degree_id'),
            'nevro_validity_degree_id' => Yii::t('main', 'nevro_validity_degree_id'),
            'nevro_restriction_degree_id' => Yii::t('main', 'nevro_restriction_degree_id'),
            'psix_validity_degree_id' => Yii::t('main', 'psix_validity_degree_id'),
            'psix_restriction_degree_id' => Yii::t('main', 'psix_restriction_degree_id'),
            'okulist_validity_degree_id' => Yii::t('main', 'okulist_validity_degree_id'),
            'okulist_restriction_degree_id' => Yii::t('main', 'okulist_restriction_degree_id'),
            'oto_validity_degree_id' => Yii::t('main', 'oto_validity_degree_id'),
            'oto_restriction_degree_id' => Yii::t('main', 'oto_restriction_degree_id'),
            'stom_validity_degree_id' => Yii::t('main', 'stom_validity_degree_id'),
            'stom_restriction_degree_id' => Yii::t('main', 'stom_restriction_degree_id'),
            'registered_ond' => Yii::t('main', 'Registered On D'),
            'registered_ond_reason' => Yii::t('main', 'Registered On D Reason'),
            'suitable_for_military_service' => Yii::t('main', 'Suitable For Military Service'),
            'suitable_for_military_service_vdv' => Yii::t('main', 'Suitable For Military Service Vdv'),
            'intended_for_vs' => Yii::t('main', 'Intended For Vs'),
            'unsuitable_in_peace_time' => Yii::t('main', 'Unsuitable In Peace Time'),
            'unsuitable_with_exception' => Yii::t('main', 'Unsuitable With Exception'),
            'send_for_treatment' => Yii::t('main', 'Send For Treatment'),
            'provide_reprieve' => Yii::t('main', 'Provide Reprieve'),
            'enddate_of_reprieve' => Yii::t('main', 'Enddate Of Reprieve'),
            'appearance_date_to_send' => Yii::t('main', 'Appearance Date To Send'),
            'commission_chairman' => Yii::t('main', 'Commission Chairman'),
            'commission_members' => Yii::t('main', 'Commission Members'),
            'head_of_dep' => Yii::t('main', 'Head Of Dep'),
            'representative_nuroniy' => Yii::t('main', 'Representative Nuroniy'),
            'representative_kamolot' => Yii::t('main', 'Representative Kamolot'),
            'representative_maxalla' => Yii::t('main', 'Representative Maxalla'),
            'representative1' => Yii::t('main', 'Representative1'),
            'representative2' => Yii::t('main', 'Representative2'),
            'senior_doctor' => Yii::t('main', 'Senior Doctor'),
            'conscript_id' => Yii::t('main', 'Conscript ID'),
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
    public function getRestrictionDegree()
    {
        return $this->hasOne(EntRestrictionDegree::className(), ['id' => 'restriction_degree_id']);
    }

    public function getDermatologValidityDegree()
    {
        return $this->hasOne(EntValidityDegree::className(), ['id' => 'dermatolog_validity_degree_id']);
    }

    public function getDermatologRestrictionDegree()
    {
        return $this->hasOne(EntRestrictionDegree::className(), ['id' => 'dermatolog_restriction_degree_id']);
    }

    public function getXirurgValidityDegree()
    {
        return $this->hasOne(EntValidityDegree::className(), ['id' => 'xirurg_validity_degree_id']);
    }

    public function getXirurgRestrictionDegree()
    {
        return $this->hasOne(EntRestrictionDegree::className(), ['id' => 'xirurg_restriction_degree_id']);
    }

    public function getTerapevtValidityDegree()
    {
        return $this->hasOne(EntValidityDegree::className(), ['id' => 'terapevt_validity_degree_id']);
    }

    public function getTerapevtRestrictionDegree()
    {
        return $this->hasOne(EntRestrictionDegree::className(), ['id' => 'terapevt_restriction_degree_id']);
    }

    public function getFlyuroValidityDegree()
    {
        return $this->hasOne(EntValidityDegree::className(), ['id' => 'flyuro_validity_degree_id']);
    }

    public function getFlyuroRestrictionDegree()
    {
        return $this->hasOne(EntRestrictionDegree::className(), ['id' => 'flyuro_restriction_degree_id']);
    }

    public function getNevroValidityDegree()
    {
        return $this->hasOne(EntValidityDegree::className(), ['id' => 'nevro_validity_degree_id']);
    }

    public function getNevroRestrictionDegree()
    {
        return $this->hasOne(EntRestrictionDegree::className(), ['id' => 'nevro_restriction_degree_id']);
    }

    public function getPsixValidityDegree()
    {
        return $this->hasOne(EntValidityDegree::className(), ['id' => 'psix_validity_degree_id']);
    }

    public function getPsixRestrictionDegree()
    {
        return $this->hasOne(EntRestrictionDegree::className(), ['id' => 'psix_restriction_degree_id']);
    }

    public function getOkulistValidityDegree()
    {
        return $this->hasOne(EntValidityDegree::className(), ['id' => 'okulist_validity_degree_id']);
    }

    public function getOkulistRestrictionDegree()
    {
        return $this->hasOne(EntRestrictionDegree::className(), ['id' => 'okulist_restriction_degree_id']);
    }

    public function getOtoValidityDegree()
    {
        return $this->hasOne(EntValidityDegree::className(), ['id' => 'oto_validity_degree_id']);
    }

    public function getOtoRestrictionDegree()
    {
        return $this->hasOne(EntRestrictionDegree::className(), ['id' => 'oto_restriction_degree_id']);
    }

    public function getStomValidityDegree()
    {
        return $this->hasOne(EntValidityDegree::className(), ['id' => 'stom_validity_degree_id']);
    }

    public function getStomRestrictionDegree()
    {
        return $this->hasOne(EntRestrictionDegree::className(), ['id' => 'stom_restriction_degree_id']);
    }

}
