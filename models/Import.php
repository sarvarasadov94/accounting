<?php
/**
 * Created by PhpStorm.
 * User: s_asadov
 * Date: 22.04.2019
 * Time: 16:50
 */

namespace app\models;


class Import extends \yii\db\ActiveRecord
{

    public $file;
    public $type;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['file'], 'safe'],
            [['file'], 'file', 'extensions' => 'xls, csv, xlsx'],
            [['type'], 'integer'],
            [['type', 'file'], 'required'],

        ];
    }

}
