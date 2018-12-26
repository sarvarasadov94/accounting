<?php


use app\models\LangTranslations;
use yii\helpers\ArrayHelper;

return ArrayHelper::map(LangTranslations::find()->all(),'code','lang_ru');