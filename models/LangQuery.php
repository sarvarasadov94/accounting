<?php
/**
 * Created by PhpStorm.
 * User: s_asadov
 * Date: 06.04.2018
 * Time: 10:49
 */

namespace app\models;

class LangQuery extends \yii\db\ActiveQuery
{
    /**
     * @inheritdoc
     * @return Lang[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Lang|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
