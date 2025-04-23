<?php
namespace app\models;

use yii\db\ActiveRecord;

class ServicePlan extends ActiveRecord
{
    public static function tableName()
    {
        return 'service_plans';
    }

    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            ['price', 'number', 'min' => 0],
        ];
    }
}